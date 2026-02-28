/**
 * recaptcha.js
 * Callback invocado por Google reCAPTCHA v3 al completar el desafío invisible.
 * Se carga únicamente en contacto.php.
 */
function onSubmit(token) {
    const form = document.getElementById('contact-form');
    const btn = document.getElementById('contact-submit');
    const status = document.getElementById('form-status');

    // Anti-spam: honeypot (defensa en cliente; la real está en el backend)
    const hp = document.getElementById('website');
    if (hp && hp.value.trim() !== '') {
        if (status) status.textContent = 'Error: detección de spam.';
        return;
    }

    // Bloquear doble envío mientras el formulario se procesa
    if (btn) {
        btn.disabled = true;
        btn.textContent = 'Enviando…';
    }

    // Enviar al backend (back/envio_formulario.php)
    form.submit();
}
