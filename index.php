<?php 
  $title = "Inicio — DigitalDevs"; 
  $active = "inicio"; 
  include __DIR__ . "/includes/head.php"; 
?>
<main>
  <section class="hero">
    <div class="container hero-grid">
      <div class="hero-copy">
        <h1>Impulsa tu negocio con <span class="grad">Tecnología y Diseño</span></h1>
        <p>Webs rápidas, seguras y listas para convertir. Componentes reutilizables, escalables y fáciles de editar.</p>
        <div class="hero-cta">
          <a href="/contacto.php" class="btn btn-lg">Comenzar ahora</a>
          <a href="/portafolio.php" class="btn btn-ghost">Ver trabajos</a>
        </div>
        <ul class="hero-bullets">
          <li>Desarrollo Web</li>
          <li>Soluciones IA</li>
          <li>Cyberseguridad</li>
        </ul>
      </div>
      <div class="hero-art">
        <div class="glass-card">
          <h3>Panel en tiempo real</h3>
          <p>Estadísticas, interacción y reportes claros.</p>
          <div class="stats">
            <div><strong>+178%</strong><span>Tráfico</span></div>
            <div><strong>98</strong><span>PageSpeed</span></div>
            <div><strong>24/7</strong><span>Monitoreo</span></div>
          </div>
        </div>
        <div class="blob"></div>
        <div class="blob blob-2"></div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <header class="section-head">
        <h2>Servicios <span class="grad">Destacados</span></h2>
        <p>Soluciones para tu Empresa o Proyecto</p>
      </header>

      <div class="grid cards-3">
        <!-- Card 1 -->
        <a href="#" target="_blank" rel="noopener" class="card">
          <div class="icon">⚙️</div>
          <h3>Desarrollo Web</h3>
          <p>(Próximamente)</p>
        </a>

        <!-- Card 2 -->
        <a href="#" target="_blank" rel="noopener" class="card">
          <div class="icon">🛒</div>
          <h3>E-Commerce</h3>
          <p>(Próximamente)</p>
        </a>

        <!-- Card 3 -->
        <a href="#" target="_blank" rel="noopener" class="card">
          <div class="icon">🤖</div>
          <h3>Soluciones IA</h3>
          <p>(Próximamente)</p>
        </a>
      </div>
    </div>
  </section>
</main>

<?php include __DIR__ . "/includes/footer.php"; ?>
