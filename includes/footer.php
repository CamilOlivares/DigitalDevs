  <footer class="site-footer">

    <!-- Orbes decorativos de fondo -->
    <div class="footer-orb footer-orb--1" aria-hidden="true"></div>
    <div class="footer-orb footer-orb--2" aria-hidden="true"></div>

    <div class="container">

      <!-- Franja superior -->
      <div class="footer-top">

        <!-- Marca + tagline -->
        <div class="footer-brand">
          <a href="index.php" class="brand" aria-label="DigitalDevs — Inicio">
            <img src="assets/img/brand/logo-mark.png" alt="DigitalDevs" width="32" height="32" class="brand-mark"/>
            <span class="brand-text">DigitalDevs</span>
          </a>
          <p class="footer-tagline">Webs rápidas, seguras y listas<br>para convertir.</p>
        </div>

        <!-- Navegación columna -->
        <nav class="footer-links" aria-label="Atajos del sitio">
          <span class="footer-col-title">Sitio</span>
          <a href="index.php">Inicio</a>
          <a href="servicios.php">Servicios</a>
          <a href="portafolio.php">Portafolio</a>
          <a href="recursos.php">Recursos</a>
          <a href="contacto.php">Contacto</a>
        </nav>

        <!-- Columna de contacto rápido -->
        <div class="footer-contact">
          <span class="footer-col-title">Contacto</span>
          <a href="mailto:contacto@digitaldevs.cl" class="footer-contact-link">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="3"/><polyline points="2,4 12,13 22,4"/></svg>
            contacto@digitaldevs.cl
          </a>
          <a href="https://store.digitaldevs.cl/" target="_blank" rel="noopener" class="footer-contact-link">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>
            Tienda DigitalDevs
          </a>
        </div>

      </div>

      <!-- Línea divisora animada -->
      <div class="footer-divider" aria-hidden="true"></div>

      <!-- Franja inferior -->
      <div class="footer-bottom">
        <p class="muted footer-copy">© <span id="year"></span> DigitalDevs. Todos los derechos reservados.</p>
        <div class="footer-badges">
          <span class="badge">⚡ Alto Rendimiento</span>
          <span class="badge">🛡️ Seguro</span>
          <span class="badge">🤖 IA Ready</span>
        </div>
      </div>

    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="assets/js/main.js?v=<?= filemtime(__DIR__ . '/../assets/js/main.js') ?>"></script>
</body>
</html>
