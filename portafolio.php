<?php
$title  = "Portafolio — DigitalDevs";
$active = "portafolio";
include __DIR__ . "/includes/head.php";

/**
 * Define aquí tus proyectos: título, imagen y URL del sitio.
 * Cambia las URLs por las reales de cada proyecto.
 */
$projects = [
  [ "title" => "Fama Factory - Segidores RRSS",  "image" => "/assets/img/portfolio/Proyecto1.png",  "url" => "http://famafactory.cl/" ],
  [ "title" => "Yetwater - Agua Capturada del Aire",  "image" => "/assets/img/portfolio/Proyecto2.png",  "url" => "https://yetwater.cl/" ],
  [ "title" => "Rubico Spa - Logistica",  "image" => "/assets/img/portfolio/Proyecto3.png",  "url" => "https://rubicospa.cl/" ],
  [ "title" => "Protal Spa - Servicios Generales",  "image" => "/assets/img/portfolio/Proyecto5.png",  "url" => "https://protalspa.cl/" ],
  [ "title" => "Prosecurity Chile Spa - Seguridad Privada",  "image" => "/assets/img/portfolio/Proyecto6.png",  "url" => "https://prosecuritychile.cl/" ],
  [ "title" => "Stoik Spa - Backoffice",  "image" => "/assets/img/portfolio/Proyecto7.png",  "url" => "https://stoikspa.cl/" ],
  [ "title" => "Minaer Spa - Seguridad Privada",  "image" => "/assets/img/portfolio/Proyecto8.png",  "url" => "https://minaer.cl/" ],
  [ "title" => "Formaplus - OTEC",  "image" => "/assets/img/portfolio/Proyecto9.png",  "url" => "https://formaplus.cl/" ],
  [ "title" => "factory 13 - Producciones", "image" => "/assets/img/portfolio/Proyecto10.png", "url" => "https://factory13.cl/" ],
];
?>

<main>
  <section class="section">
    <div class="container">
      <header class="section-head">
        <h1>Casos & <span class="grad">Portafolio</span></h1>
        <p>Proyectos reales.</p>
      </header>

      <div class="grid gallery">
        <?php foreach ($projects as $p): ?>
          <article class="shot">
            <a href="<?= htmlspecialchars($p['url']) ?>" target="_blank" rel="noopener noreferrer" aria-label="<?= htmlspecialchars($p['title']) ?> — abrir sitio">
              <img src="<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['title']) ?>">
            </a>
            <span><?= htmlspecialchars($p['title']) ?></span>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>

<?php include __DIR__ . "/includes/footer.php"; ?>
