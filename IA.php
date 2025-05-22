<!DOCTYPE html> <!-- Define el tipo de documento como HTML5 -->
<html lang="es"> <!-- Indica que el idioma del contenido es español -->
<head>
    <meta charset="UTF-8"> <!-- Define la codificación de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configura el viewport para un diseño responsivo -->
    <title>DigitalDevs</title> <!-- Título de la página que aparece en la pestaña del navegador -->
    <!-- Enlaces a hojas de estilo CSS -->
    <link rel="stylesheet" href="assets/css/styles.css"> <!-- Hoja de estilo principal -->
    <link rel="stylesheet" href="assets/css/header.css"> <!-- Hoja de estilo de header-->
    <link rel="stylesheet" href="assets/css/navbar.css"> <!-- Hoja de estilo de menu -->
    <link rel="stylesheet" href="assets/css/logo.css"> <!-- Hoja de estilo para el logo -->
    <link rel="stylesheet" href="assets/css/about.css"> <!-- Hoja de estilo sobre nosotros -->
    <link rel="stylesheet" href="assets/css/title.css"> <!-- Hoja de estilo para robot -->
    <link rel="stylesheet" href="assets/css/grid.css"> <!-- Hoja de estilo sobre grid -->
    <link rel="stylesheet" href="assets/css/robot.css"> <!-- Hoja de estilo para robot -->
    <link rel="stylesheet" href="assets/css/cursor.css"> <!-- Estilos personalizados para el cursor -->
    <link rel="stylesheet" href="assets/css/footer.css"> <!-- Estilos para el pie de página -->
    <link rel="stylesheet" href="assets/css/glitchtext.css"> <!-- Estilos para el pie de página -->

   
</head>
<body>
    
<header>
  
    <?php include('views/neuro.php'); ?>
    <?php include('views/navbar.php'); ?>
    <?php include('views/logo.php'); ?>
    
</header>

<main>
    <?php include("views/about.php"); ?>
    <?php include("views/glitchtext.php"); ?>




<!-- Grid de 4 Secciones -->
<div class="content-block grid-4">
  <div class="center-left-content">
    <img src="../assets/images/dev1.png" alt="Imagen 1">
    <p><a href="https://chatgpt.com/" target="_blank"> Chat GPT</a></p>
  </div>

  <div class="center-left-content">
    <img src="../assets/images/dev1.png" alt="Imagen 1">
    <p><a href="https://gemini.google.com/app" target="_blank">Gemini</a></p>
  </div>

  <div class="center-right-content">
    <img src="../assets/images/AI1.png" alt="Imagen 2">
    <p><a href="https://www.deepseek.com/" target="_blank">DeepSeek</a></p>
  </div>

  <div class="right-content">
    <img src="../assets/images/editor1.jpg" alt="Imagen 3">
    <p><a href="https://www.meta.ai/" target="_blank">Meta AI</a></p>
  </div>
</div>

      <?php include("views/footer.php"); ?>
</main>

    <!-- JavaScript de AOS para efectos de animación al hacer scroll -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script> 
    <!-- Scripts personalizados para el cursor -->
    <script src="js/cursor.js"></script>
    <!-- Scripts para el efecto "Neuro" en el encabezado -->
    <script src="js/neuro.js"></script>
    <!-- Scripts para el efecto "Navbar" en el encabezado -->
    <script src="js/navbar.js"></script>
    <script src="js/glitchtext.js" defer></script>
    

</body>
</html>