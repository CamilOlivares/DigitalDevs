<?php
/**
 * mail_config.php
 * Configuración global de correo y servicios externos para DigitalDevs.
 * Centraliza todas las credenciales en un único lugar.
 */

// Nombre del sitio (aparece en el campo "From" de los correos)
$SITE_NAME = "DigitalDevs";

// Dirección de destino: aquí llegarán los mensajes del formulario de contacto
$TO_EMAIL = "contacto@digitaldevs.cl";

// Dirección de remitente (debe pertenecer al mismo dominio del hosting
// para evitar que los correos sean marcados como spam)
$FROM_EMAIL = "no-reply@digitaldevs.cl";

// Clave secreta de Google reCAPTCHA v3
// Obtén la tuya en: https://www.google.com/recaptcha/admin
$RECAPTCHA_SECRET = "6LdJpvMqAAAAADNf-HAg8T9PHJJZKH5ni0lSQqK8";
