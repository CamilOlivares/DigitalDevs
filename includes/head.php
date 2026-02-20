<?php
if (!isset($title)) { $title = "DigitalDevs — Soluciones Web"; }
if (!isset($active)) { $active = ""; }
?><!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title><?= htmlspecialchars($title) ?></title>
  <meta name="description" content="Agencia DigitalDevs: desarrollo web, e‑commerce, automatización y SEO con alto rendimiento."/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/brand/icon-32.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/assets/img/brand/icon-192.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/brand/icon-180.png">
  <link rel="stylesheet" href="/assets/css/style.css"/>
</head>
<body>
  <header class="site-header" id="top">
    <div class="container nav-container">
      <a href="/index.php" class="brand" aria-label="DigitalDevs — Inicio">
        <img src="/assets/img/brand/logo-mark.png" alt="DigitalDevs" width="40" height="40" class="brand-mark"/>
        <span class="brand-text">DigitalDevs</span>
      </a>
      <nav class="nav" id="mainNav" aria-label="Navegación principal">
        <a href="/index.php" class="<?= $active==='inicio'?'is-active':'' ?>">Inicio</a>
        <a href="/recursos.php" class="<?= $active==='recursos'?'is-active':'' ?>">Recursos</a>
        <a href="/contacto.php" class="btn btn-sm <?= $active==='contacto'?'is-active':'' ?>">Contacto</a>
      </nav>
      <button class="theme-toggle" id="themeToggle" aria-label="Cambiar tema">
        <svg id="icon-sun" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/>
          <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/>
          <line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/>
          <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/>
        </svg>
        <svg id="icon-moon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <path d="M21 12.79A9 9 0 1111.21 3a7 7 0 009.79 9.79z"/>
        </svg>
      </button>
      <button class="burger" id="burger" aria-label="Abrir menú" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>

    <script src="https://www.google.com/recaptcha/api.js"></script>

  </header>
