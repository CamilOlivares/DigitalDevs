<?php $title="Contacto — DigitalDevs"; $active="contacto"; include __DIR__."/includes/head.php"; ?>
<main>
  <section class="section" id="contact" data-aos="fade-up">
    <div class="container">
      <header class="section-head">
        <h1>Hablemos de tu <span class="grad">proyecto</span></h1>
        <p>Completa el formulario y te contactamos en breve.</p>
      </header>

      <form id="contact-form" class="contact-form" action="/back/envio-formulario.php" method="post" novalidate>
        <div class="grid form-grid">
          <div class="field">
            <label for="name">Nombre</label>
            <input id="name" name="name" type="text" placeholder="Tu nombre" autocomplete="name" required>
          </div>

          <div class="field">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" placeholder="tucorreo@dominio.com" autocomplete="email" required>
          </div>

          <div class="field">
            <label for="phone">Teléfono (opcional)</label>
            <input id="phone" name="phone" type="tel" placeholder="+56 9 1234 5678">
          </div>

          <div class="field">
            <label for="subject">Asunto</label>
            <input id="subject" name="subject" type="text" placeholder="Asunto" required>
          </div>

          <div class="field full">
            <label for="message">Mensaje</label>
            <textarea id="message" name="message" rows="5" placeholder="Cuéntanos qué necesitas" required></textarea>
          </div>

          <!-- Honeypot (anti-bots). Ocúltalo con CSS -->
          <input type="text" name="website" id="website" class="hp" tabindex="-1" autocomplete="off" aria-hidden="true">
        </div>

        <!-- Estado accesible -->
        <p id="form-status" class="form-status" role="status" aria-live="polite"></p>

        <!-- UN SOLO botón con reCAPTCHA v3 (invisible) -->
        <button
          id="contact-submit"
          class="g-recaptcha btn btn-lg"
          data-sitekey="6LdJpvMqAAAAAJLLoMiE06OXIUAKcX6xguKhIBgg"
          data-callback="onSubmit"
          data-action="submit">
          Enviar
        </button>
      </form>
    </div>
  </section>
</main>
<?php include __DIR__."/includes/footer.php"; ?>

<!-- Carga oficial de reCAPTCHA v3 -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- Callback: puedes dejarlo aquí o moverlo a /assets/js/recapcha.js -->
<script>
  // Callback del botón reCAPTCHA v3
  function onSubmit(token) {
    const form   = document.getElementById('contact-form');
    const btn    = document.getElementById('contact-submit');
    const status = document.getElementById('form-status');

    // Honeypot (defensa rápida en cliente; la real está en el backend)
    const hp = document.getElementById('website');
    if (hp && hp.value.trim() !== '') {
      if (status) status.textContent = 'Error: detección de spam.';
      return;
    }

    // Bloquear doble envío
    if (btn) {
      btn.disabled = true;
      btn.dataset.original = btn.textContent;
      btn.textContent = 'Enviando…';
    }

    // Enviar el formulario (el backend valida reCAPTCHA y manda el email)
    form.submit();
  }

  // Defensa adicional: si el honeypot viene relleno, no envía
  document.getElementById('contact-form')?.addEventListener('submit', function (e) {
    const hp = document.getElementById('website');
    if (hp && hp.value.trim() !== '') {
      e.preventDefault();
      const status = document.getElementById('form-status');
      if (status) status.textContent = 'Error: detección de spam.';
    }
  });
</script>

<style>
  /* Oculta el honeypot */
  .hp { display: none !important; }
  .form-status { margin-top: .5rem; opacity: .85; }
</style>
