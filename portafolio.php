<?php
$title = "Portafolio — DigitalDevs";
$active = "portafolio";
include __DIR__ . "/includes/head.php";

/**
 * Define aquí tus proyectos: título, imagen y URL del sitio.
 * Cambia las URLs por las reales de cada proyecto.
 */
$projects = [
  "APPS WEB" => [
    ["title" => "ZyCardy - Tu Identidad Digital Premium", "image" => "/assets/img/portfolio/zycardy.png", "url" => "https://www.zycardy.com/"],
  ],
  "Sitios Web" => [
    ["title" => "Yetwater - Agua Capturada del Aire", "image" => "/assets/img/portfolio/Proyecto2.png", "url" => "https://yetwater.cl/"],
    ["title" => "Rubico Spa - Logistica", "image" => "/assets/img/portfolio/Proyecto3.png", "url" => "https://rubicospa.cl/"],
    ["title" => "Protal Spa - Servicios Generales", "image" => "/assets/img/portfolio/Proyecto5.png", "url" => "https://protalspa.cl/"],
    ["title" => "Stoik Spa - Backoffice", "image" => "/assets/img/portfolio/Proyecto7.png", "url" => "https://stoikspa.cl/"],
    ["title" => "Minaer Spa - Seguridad Privada", "image" => "/assets/img/portfolio/Proyecto8.png", "url" => "https://minaer.cl/"],
    ["title" => "Protal - Servicios Generales", "image" => "/assets/img/portfolio/Proyecto11.png", "url" => "https://protal.digitaldevs.cl/"],
    ["title" => "Protal Miami- Generales Services", "image" => "/assets/img/portfolio/Proyecto12.png", "url" => "https://protalmiami.digitaldevs.cl/"],
    ["title" => "GyG - Consultoria", "image" => "/assets/img/portfolio/Proyecto13.png", "url" => "https://gyg.digitaldevs.cl/"],
  ]
];
?>

<main>
  <section class="section">
    <div class="container">
      <header class="section-head">
        <h1>Casos & <span class="grad">Portafolios</span></h1>
      </header>

      <?php foreach ($projects as $category => $cat_projects): ?>
        <div class="portfolio-category">
          <h2 class="portfolio-category-title grad-reverse"><?= htmlspecialchars($category) ?></h2>
          <div class="grid gallery <?= count($cat_projects) === 1 ? 'is-single' : '' ?>">
            <?php foreach ($cat_projects as $p): ?>
              <article class="glass-portfolio">
                <a href="<?= htmlspecialchars($p['url']) ?>" target="_blank" rel="noopener noreferrer"
                  aria-label="<?= htmlspecialchars($p['title']) ?> — abrir sitio">
                  <div class="gp-glow"></div>
                  <div class="gp-image">
                    <img src="<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['title']) ?>">
                    <div class="gp-overlay">
                      <span class="gp-view-text">Ver Proyecto <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                          stroke="currentColor" stroke-width="2">
                          <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg></span>
                    </div>
                  </div>
                  <div class="gp-content">
                    <h3><?= htmlspecialchars($p['title']) ?></h3>
                  </div>
                </a>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</main>

<?php include __DIR__ . "/includes/footer.php"; ?>