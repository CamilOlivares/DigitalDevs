<?php
$title      = "Contacto — DigitalDevs";
$active     = "contacto";
$extra_head = '<script src="https://www.google.com/recaptcha/api.js" async defer></script>';
include __DIR__ . "/includes/head.php";
?>
<main>
  <!-- ── Hero de Contacto ── -->
  <section class="section contact-hero" id="contact">
    <div class="contact-orb contact-orb--1" aria-hidden="true"></div>
    <div class="contact-orb contact-orb--2" aria-hidden="true"></div>

    <div class="container contact-layout">
      <!-- ── Columna izquierda: info ── -->
      <div class="contact-info reveal">
        <div class="contact-badge">Hablemos</div>
        <h1>¿Tienes un <span class="grad">proyecto</span>?</h1>
        <p class="contact-sub">Cuéntanos tu idea y te responderemos en menos de 24 h.</p>

        <ul class="contact-features">
          <li>
            <span class="cf-icon">⚡</span>
            <div>
              <strong>Respuesta rápida</strong>
              <span>En menos de 24 horas hábiles</span>
            </div>
          </li>
          <li>
            <span class="cf-icon">🔒</span>
            <div>
              <strong>Confidencialidad</strong>
              <span>Tu información siempre protegida</span>
            </div>
          </li>
          <li>
            <span class="cf-icon">🚀</span>
            <div>
              <strong>Propuesta sin costo</strong>
              <span>Primera consulta 100% gratuita</span>
            </div>
          </li>
        </ul>

        <!-- Conecta con nosotros -->
        <h3 class="contact-social-title">Síguenos</h3>
        <div class="contact-social-links">
          <a href="#" class="social-icon" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg></a>
          <a href="#" class="social-icon" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></a>
          <a href="#" class="social-icon" aria-label="Twitter"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></a>
        </div>
      </div>

      <!-- ── Columna derecha: formulario glass ── -->
      <div class="contact-form-wrap reveal">
        <div class="contact-glass">
          <div class="cg-shimmer" aria-hidden="true"></div>

          <form id="contact-form" action="back/envio_formulario.php" method="post" novalidate>
            <div class="form-grid-2">
              <div class="field">
                <label for="name">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
                  Nombre
                </label>
                <input id="name" name="name" type="text" placeholder="Tu nombre completo" autocomplete="name" required>
              </div>

              <div class="field">
                <label for="email">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="3"/><polyline points="2,4 12,13 22,4"/></svg>
                  Email
                </label>
                <input id="email" name="email" type="email" placeholder="tucorreo@dominio.com" autocomplete="email" required>
              </div>

              <div class="field">
                <label for="phone">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2A19.86 19.86 0 013.09 4.18 2 2 0 015.09 2h3a2 2 0 012 1.72c.13 1 .37 1.97.72 2.9a2 2 0 01-.45 2.11l-1.27 1.27a16 16 0 006.62 6.62l1.27-1.27a2 2 0 012.11-.45c.93.35 1.9.59 2.9.72A2 2 0 0122 16.92z"/></svg>
                  Teléfono <span class="label-opt">(opcional)</span>
                </label>
                <input id="phone" name="phone" type="tel" placeholder="+56 9 1234 5678">
              </div>

              <div class="field">
                <label for="subject">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                  Asunto
                </label>
                <input id="subject" name="subject" type="text" placeholder="¿En qué te podemos ayudar?" required>
              </div>

              <div class="field full">
                <label for="message">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                  Mensaje
                </label>
                <textarea id="message" name="message" rows="5" placeholder="Cuéntanos tu proyecto, idea o consulta…" required></textarea>
              </div>
            </div>

            <input type="text" name="website" id="website" class="hp" tabindex="-1" autocomplete="off" aria-hidden="true">
            <p id="form-status" class="form-status" role="status" aria-live="polite"></p>

            <button
              id="contact-submit"
              class="g-recaptcha btn btn-lg btn-block"
              data-sitekey="6LdJpvMqAAAAAJLLoMiE06OXIUAKcX6xguKhIBgg"
              data-callback="onSubmit"
              data-action="submit">
              Enviar mensaje →
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- ── Ubicación & Horario ── -->
  <section class="section contact-secondary">
    <div class="container">
      <div class="grid cards-3">
        <!-- Tarjeta de Horario -->
        <div class="glass-card reveal">
          <div class="icon">🕒</div>
          <h3>Horario de Atención</h3>
          <p class="muted">Estamos disponibles para responder tus dudas.</p>
          <ul class="contact-list muted">
            <li><strong>Lun - Vie:</strong> 09:00 a 18:00</li>
            <li><strong>Sábado:</strong> Soporte de emergencias</li>
            <li><strong>Domingo:</strong> Cerrado</li>
          </ul>
        </div>

        <!-- Tarjeta de Ubicación -->
        <div class="glass-card reveal">
          <div class="icon">📍</div>
          <h3>Nuestra Base</h3>
          <p class="muted">Operamos de forma 100% remota a nivel mundial, pero nuestras raíces están aquí:</p>
          <ul class="contact-list muted">
            <li><strong>País:</strong> Chile 🇨🇱</li>
            <li><strong>Región:</strong> Metropolitana</li>
            <li><strong>Email:</strong> contacto@digitaldevs.cl</li>
          </ul>
        </div>

        <!-- Tarjeta de Ayuda -->
        <div class="glass-card reveal">
          <div class="icon">💬</div>
          <h3>FAQ Rápidas</h3>
          <ul class="faq-list muted">
            <li><strong>¿Hacen sitios a medida?</strong><br>Sí, diseñamos soluciones 100% personalizadas.</li>
            <li><strong>¿Cuánto tardan?</strong><br>Depende del proyecto, desde 1 semana en adelante.</li>
            <li><strong>¿Incluye hosting?</strong><br>Sí, los primeros 12 meses van por nuestra cuenta.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</main>

<script src="assets/js/recaptcha.js"></script>
<?php include __DIR__ . "/includes/footer.php"; ?>
