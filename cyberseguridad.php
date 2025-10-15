<?php 
$title = "Recursos Devs — DigitalDevs"; 
$active = "Recursos Devs"; 
include __DIR__ . "/includes/head.php"; 
?>

<main>
  <section class="section">
    <div class="container">
      <header class="section-head">
        <h1>CyberSeguridad <span class="grad">Digitales</span></h1>
        <p>Protege tu Entorno</p>
      </header>

      <!-- Un solo grid: 3 columnas x 2 filas -->
      <div class="grid cards-3">
        <a href="#" class="card" style="text-decoration: none; color: inherit;">
          <div class="icon">🛡️</div>
          <h3>Tienda</h3>
          <p>Revisa los Productos de Seguridad que tenemos para ti (Próximamente)</p>
        </a>
      </div>

      <!-- Mapa de ataques cibernéticos -->
      <iframe width="1200" height="750" src="https://cybermap.kaspersky.com/es/widget/dynamic/dark" frameborder="0"></iframe>

    </div>
  </section>
</main>

<?php include __DIR__ . "/includes/footer.php"; ?>