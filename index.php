<!DOCTYPE html> <!-- Define el tipo de documento como HTML5 -->
<html lang="es"> <!-- Indica que el idioma del contenido es español -->
<head>
    <meta charset="UTF-8"> <!-- Define la codificación de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configura el viewport para un diseño responsivo -->
    <title>Somos Digital</title> <!-- Título de la página que aparece en la pestaña del navegador -->
    <!-- Enlaces a hojas de estilo CSS -->
    <link rel="stylesheet" href="assets/css/styles.css"> <!-- Hoja de estilo principal -->
    <link rel="stylesheet" href="assets/css/header.css"> <!-- Hoja de estilo principal -->
    <link rel="stylesheet" href="assets/css/navbar.css"> <!-- Hoja de estilo principal -->
    <link rel="stylesheet" href="assets/css/logo.css"> <!-- Hoja de estilo principal -->
    <link rel="stylesheet" href="assets/css/about.css"> <!-- Hoja de estilo principal -->
    <link rel="stylesheet" href="assets/css/robot.css"> <!-- Hoja de estilo principal -->
    <link rel="stylesheet" href="assets/css/cursor.css"> <!-- Estilos personalizados para el cursor -->
    <link rel="stylesheet" href="assets/css/footer.css"> <!-- Estilos para el pie de página -->
</head>
<body>
    
<header>
    <?php include('views/neuro.php'); ?>
    <?php include('views/navbar.php'); ?>
    <?php include('views/logo.php'); ?>
    
</header>

<main>
    <?php include("views/about.php"); ?>
    <?php include("partials/robot.php"); ?>
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
    

</body>
</html>