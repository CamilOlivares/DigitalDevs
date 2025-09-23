<?php
/**
 * actions/send_contact.php
 * Envía el formulario de contacto con verificación reCAPTCHA v3.
 * Responde SIEMPRE JSON para que el frontend (AJAX) lo maneje.
 */

header('Content-Type: application/json; charset=utf-8');

// Carga de configuración de correo (remitente y destinatario)
require_once __DIR__ . '/../mail_config.php';

/* Opcional en desarrollo: mostrar errores */
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// Solo permitir POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  echo json_encode(['success' => false, 'message' => 'Método no permitido.']);
  exit;
}

// Saneador simple de texto
function sanitize($s) {
  return trim(filter_var($s, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
}

/* --------- Anti-spam: Honeypot --------- */
$hp = $_POST['website'] ?? '';
if ($hp !== '') {
  echo json_encode(['success' => false, 'message' => 'Spam detectado.']);
  exit;
}

/* --------- reCAPTCHA v3 --------- */
/* Secret proporcionado por ti */
$secretKey = "6LdJpvMqAAAAADNf-HAg8T9PHJJZKH5ni0lSQqK8";

$token = $_POST['g-recaptcha-response'] ?? '';
if (!$token) {
  echo json_encode(['success' => false, 'message' => 'Falta verificación reCAPTCHA.']);
  exit;
}

$url = "https://www.google.com/recaptcha/api/siteverify";
$data = [
  'secret'   => $secretKey,
  'response' => $token,
  // 'remoteip' => $_SERVER['REMOTE_ADDR'] ?? null, // opcional
];

$options = [
  'http' => [
    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
    'method'  => 'POST',
    'content' => http_build_query($data),
    'timeout' => 5,
  ]
];

$context  = stream_context_create($options);
$response = @file_get_contents($url, false, $context);
$result   = @json_decode($response, true);

// Validaciones básicas
if (!$result || empty($result['success'])) {
  echo json_encode(['success' => false, 'message' => 'Error en reCAPTCHA.']);
  exit;
}

// Umbral de score (ajústalo si necesitas)
if (isset($result['score']) && $result['score'] < 0.5) {
  echo json_encode(['success' => false, 'message' => 'Score reCAPTCHA bajo.']);
  exit;
}

/* --------- Campos del formulario --------- */
$name  = isset($_POST['name'])  ? sanitize($_POST['name'])  : '';
$email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : false;
$phone = isset($_POST['phone']) ? sanitize($_POST['phone']) : '';
$msg   = isset($_POST['message']) ? trim($_POST['message']) : '';

if (!$name || !$email || !$msg) {
  echo json_encode(['success' => false, 'message' => 'Completa nombre, email y mensaje.']);
  exit;
}

/* --------- Composición del correo --------- */
/**
 * $TO_EMAIL y $FROM_EMAIL deben venir desde mail_config.php:
 *   $SITE_NAME = "DigitalDevs";
 *   $TO_EMAIL  = "contacto@digitaldevs.cl";
 *   $FROM_EMAIL= "no-reply@digitaldevs.cl";
 */
$subject = "Nuevo contacto — {$SITE_NAME}";
$body  = "Nombre: {$name}\n";
$body .= "Email: {$email}\n";
$body .= "Teléfono: {$phone}\n";
$body .= "Mensaje:\n{$msg}\n";
$body .= "\nIP: " . ($_SERVER['REMOTE_ADDR'] ?? 'N/A');

// Cabeceras
$headers = [
  "From: {$SITE_NAME} <{$FROM_EMAIL}>",
  "Reply-To: {$name} <{$email}>",
  "MIME-Version: 1.0",
  "Content-Type: text/plain; charset=UTF-8"
];

// Envío
$ok = @mail($TO_EMAIL, $subject, $body, implode("\r\n", $headers));

// Respuesta JSON
echo json_encode($ok
  ? ['success' => true]
  : ['success' => false, 'message' => 'No se pudo enviar el correo. Revisa la configuración de mail() en tu hosting.']
);
