<!DOCTYPE html> <!-- Define el tipo de documento como HTML5 -->
<html lang="es"> <!-- Indica que el idioma del contenido es español -->
<head>
    <meta charset="UTF-8"> <!-- Define la codificación de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configura el viewport para un diseño responsivo -->
    <title>CONTACTO</title> <!-- Título de la página que aparece en la pestaña del navegador -->
    
    <!-- Enlaces a hojas de estilo CSS -->
    <link rel="stylesheet" href="assets/css/contact.css"> <!-- aqui colocas tu estilo de CSS que prefieras (no viene incluido,revisar en seccion de estilos de formulario) -->
    <link rel="stylesheet" href="assets/css/navbar.css"> <!-- Hoja de estilo de menu -->
    <link rel="stylesheet" href="assets/css/logo.css"> <!-- Hoja de estilo para el logo -->
    
</head>
<body>

    <?php include('views/navbar.php'); ?>
    <?php include('views/logo.php'); ?>   


<!-- Incluye el contenido del formulairo de contacto -->
 <?php include("views/contact.php"); ?> 


<!-- Scripts para el cargador de la página -->
<script src="js/recaptcha.js"></script>
<!-- JavaScript de AOS para efectos de animación al hacer scroll -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script> 
<!-- Scripts personalizados para el cursor -->
<script src="js/cursor.js"></script>
<!-- Scripts para el efecto "Navbar" en el encabezado -->
<script src="js/navbar.js"></script>



</body>
</html>