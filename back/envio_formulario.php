<?php
/**
 * back/envio_formulario.php
 * Procesa el formulario de contacto con verificación reCAPTCHA v3.
 * Responde JSON si la petición es AJAX; HTML simple en caso contrario.
 */

require_once __DIR__ . '/../mail_config.php';

header('X-Content-Type-Options: nosniff');

// ──────────────────────────────────────────────
// Helpers
// ──────────────────────────────────────────────

/** Devuelve true si la petición viene de AJAX / fetch */
function is_ajax(): bool {
    return (!empty($_SERVER['HTTP_X_REQUESTED_WITH'])
        && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')
        || (isset($_SERVER['HTTP_ACCEPT'])
            && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false);
}

/** Termina la ejecución enviando JSON o una página HTML mínima */
function respond(bool $ok, string $message = '', int $http = 200): never {
    if (is_ajax()) {
        header('Content-Type: application/json; charset=utf-8', true, $http);
        echo json_encode(['success' => $ok, 'message' => $message], JSON_UNESCAPED_UNICODE);
    } else {
        http_response_code($http);
        $title = $ok ? 'Mensaje enviado' : 'Error al enviar';
        echo "<!doctype html><html lang='es'><meta charset='utf-8'><title>{$title}</title>";
        echo "<body style='font-family:system-ui,-apple-system,Segoe UI,Roboto,sans-serif;padding:2rem'>";
        echo "<h1>{$title}</h1>";
        echo "<p>" . htmlspecialchars($message ?: ($ok
            ? "Gracias, te contactaremos pronto."
            : "No se pudo enviar el mensaje.")) . "</p>";
        echo "<p><a href='javascript:history.back()'>Volver</a></p>";
        echo "</body></html>";
    }
    exit;
}

/** Limpia y sanea un campo de texto simple */
function cleanse(string $s): string {
    return trim(strip_tags($s));
}

// ──────────────────────────────────────────────
// Validaciones de entrada
// ──────────────────────────────────────────────

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(false, 'Método no permitido.', 405);
}

// Anti-spam: honeypot
$hp = $_POST['website'] ?? '';
if ($hp !== '') {
    respond(false, 'Spam detectado.', 400);
}

// Campos del formulario
$name    = isset($_POST['name'])    ? cleanse($_POST['name'])    : '';
$email   = isset($_POST['email'])   ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : false;
$subject = isset($_POST['subject']) ? cleanse($_POST['subject']) : '';
$message = isset($_POST['message']) ? trim($_POST['message'])    : '';

if (!$name || !$email || !$subject || !$message) {
    respond(false, 'Completa nombre, email, asunto y mensaje.', 400);
}

// ──────────────────────────────────────────────
// Verificación reCAPTCHA v3
// ──────────────────────────────────────────────

$token = $_POST['g-recaptcha-response'] ?? '';
if (!$token) {
    respond(false, 'Falta verificación reCAPTCHA.', 400);
}

$postData = http_build_query([
    'secret'   => $RECAPTCHA_SECRET,
    'response' => $token,
    'remoteip' => $_SERVER['REMOTE_ADDR'] ?? '',
]);

$context  = stream_context_create([
    'http' => [
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => $postData,
        'timeout' => 5,
    ],
]);

$response = @file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
$result   = @json_decode($response, true);

if (!$result || empty($result['success'])) {
    respond(false, 'Error en reCAPTCHA.', 400);
}
if (isset($result['score']) && $result['score'] < 0.5) {
    respond(false, 'Score reCAPTCHA bajo.', 400);
}

// ──────────────────────────────────────────────
// Composición y envío del correo
// ──────────────────────────────────────────────

$subject_mail = "Contacto — {$SITE_NAME}: {$subject}";

$body  = "Nombre:   {$name}\n";
$body .= "Email:    {$email}\n";
$body .= "Asunto:   {$subject}\n";
$body .= "Mensaje:\n{$message}\n";
$body .= "\nIP: " . ($_SERVER['REMOTE_ADDR'] ?? 'N/A');

$headers = implode("\r\n", [
    "From: {$SITE_NAME} <{$FROM_EMAIL}>",
    "Reply-To: {$name} <{$email}>",
    "MIME-Version: 1.0",
    "Content-Type: text/plain; charset=UTF-8",
]);

$ok = @mail($TO_EMAIL, $subject_mail, $body, $headers);

if ($ok) {
    respond(true, '¡Gracias! Tu mensaje fue enviado.');
} else {
    respond(false, 'No se pudo enviar el correo. Revisa la configuración de mail() en tu hosting.', 500);
}
