<?php
// /back/envio-formulario.php
require_once __DIR__ . '/../mail_config.php';
header('X-Content-Type-Options: nosniff');

$RECAPTCHA_SECRET = "6LdJpvMqAAAAADNf-HAg8T9PHJJZKH5ni0lSQqK8"; // tu secret v3

function is_ajax(){
  return ((!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])==='xmlhttprequest')
    || (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'],'application/json')!==false));
}
function respond($ok,$message='',$http=200){
  if(is_ajax()){
    header('Content-Type: application/json; charset=utf-8', true, $http);
    echo json_encode(['success'=>$ok,'message'=>$message], JSON_UNESCAPED_UNICODE);
  }else{
    http_response_code($http);
    $title=$ok?'Mensaje enviado':'Error al enviar';
    echo "<!doctype html><html lang='es'><meta charset='utf-8'><title>{$title}</title>";
    echo "<body style='font-family:system-ui,-apple-system,Segoe UI,Roboto,sans-serif;padding:2rem'>";
    echo "<h1>{$title}</h1>";
    echo "<p>".htmlspecialchars($message ?: ($ok ? "Gracias, te contactaremos pronto." : "No se pudo enviar el mensaje."))."</p>";
    echo "<p><a href='javascript:history.back()'>Volver</a></p>";
    echo "</body></html>";
  }
  exit;
}

// Solo POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { respond(false,'Método no permitido.',405); }

// Sanitizador
function cleanse($s){ return trim(filter_var($s, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES)); }

// Honeypot
$hp = $_POST['website'] ?? '';
if ($hp !== '') { respond(false, 'Spam detectado.', 400); }

// Campos
$name    = isset($_POST['name'])    ? cleanse($_POST['name'])    : '';
$email   = isset($_POST['email'])   ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : false;
$subject = isset($_POST['subject']) ? cleanse($_POST['subject']) : '';
$message = isset($_POST['message']) ? trim($_POST['message'])    : '';

if (!$name || !$email || !$subject || !$message) {
  respond(false, 'Completa nombre, email, asunto y mensaje.', 400);
}

// reCAPTCHA v3
$token = $_POST['g-recaptcha-response'] ?? '';
if(!$token){ respond(false,'Falta verificación reCAPTCHA.',400); }

$verifyUrl = "https://www.google.com/recaptcha/api/siteverify";
$postData  = http_build_query(['secret'=>$RECAPTCHA_SECRET,'response'=>$token]);
$context   = stream_context_create(['http'=>['header'=>"Content-type: application/x-www-form-urlencoded\r\n",'method'=>'POST','content'=>$postData,'timeout'=>5]]);
$response  = @file_get_contents($verifyUrl, false, $context);
$result    = @json_decode($response, true);

if (!$result || empty($result['success']))                       { respond(false,'Error en reCAPTCHA.',400); }
if (isset($result['score']) && $result['score'] < 0.5)           { respond(false,'Score reCAPTCHA bajo.',400); }

// Componer correo y enviar
$subject_mail = "Contacto — {$SITE_NAME}: {$subject}";
$body  = "Nombre: {$name}\nEmail:  {$email}\nAsunto: {$subject}\nMensaje:\n{$message}\n\nIP: ".($_SERVER['REMOTE_ADDR']??'N/A');
$headers = ["From: {$SITE_NAME} <{$FROM_EMAIL}>","Reply-To: {$name} <{$email}>","MIME-Version: 1.0","Content-Type: text/plain; charset=UTF-8"];

$ok = @mail($TO_EMAIL, $subject_mail, $body, implode("\r\n", $headers));

if ($ok) { respond(true,'¡Gracias! Tu mensaje fue enviado.'); }
else     { respond(false,'No se pudo enviar el correo. Revisa la configuración de mail() en tu hosting.',500); }
