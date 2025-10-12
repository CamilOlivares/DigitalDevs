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
        <article class="card">
          <h3>Tienda</h3>
          <p>Revisa los Productos de Seguridad que tenemos para ti (Próximamente)</p>
        </article>


      </div>

      <!-- Mapa de ataques cibernéticos -->
      <div class="cybermap-container" style="text-align:center; margin-top: 40px;">
        <iframe
          src="https://cybermap.kaspersky.com/widget"
          width="100%"
          height="600"
          style="border: none; border-radius: 10px;"
          allowfullscreen>
        </iframe>
      </div>

    </div>
  </section>
</main>

<?php include __DIR__ . "/includes/footer.php"; ?>
