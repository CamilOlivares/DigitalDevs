<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTAFOLIO</title>

    <!-- Enlaces a hojas de estilo CSS -->
    <link rel="stylesheet" href="assets/css/styles.css"> <!-- Hoja de estilo principal -->
    <link rel="stylesheet" href="assets/css/header.css"> <!-- Hoja de estilo de header-->
    <link rel="stylesheet" href="assets/css/neuro.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/logo.css">
    <link rel="stylesheet" href="assets/css/portafolio.css">

  
</head>

<body>

    <!-- Contenedor para navbar y logo -->
    <div class="header-container">
    <?php include('views/neuro.php'); ?>
        <?php include('views/navbar.php'); ?>
        <?php include('views/logo.php'); ?>
    </div>

    <main>
        <section id="projects-more">
            <h2>Proyectos</h2>  
            <div class="projects-grid">

                <div class="project">
                    <a href="https://famafactory.cl" target="_blank" class="project-link">
                        <div class="project-image">
                            <img src="../assets/images/Proyecto1.png" alt="FamaFactory" class="project-image">
                        </div>
                        <div class="project-info">
                            <h3>FamaFactory</h3>
                            <p>famafactory.cl - Venta de Seguidores y Like</p>
                        </div>
                    </a>
                </div>

                <div class="project">
                    <a href="https://yetwater.cl" target="_blank" class="project-link">
                        <div class="project-image">
                            <img src="../assets/images/Proyecto2.png" alt="Yetwater" class="project-image">
                        </div>
                        <div class="project-info">
                            <h3>Yetwater</h3>
                            <p>yetwater.cl - Empresa de Aguas Embotellada</p>
                        </div>
                    </a>
                </div>

                <div class="project">
                    <a href="https://rubicospa.cl" target="_blank" class="project-link">
                        <div class="project-image">
                            <img src="../assets/images/Proyecto3.png" alt="Rubico" class="project-image">
                        </div>
                        <div class="project-info">
                            <h3>Rubico</h3>
                            <p>rubicospa.cl - Empresa de Logística</p>
                        </div>
                    </a>
                </div>

                <div class="project">
                    <a href="https://protalmiami.com" target="_blank" class="project-link">
                        <div class="project-image">
                            <img src="../assets/images/Proyecto4.png" alt="Protal Miami" class="project-image">
                        </div>
                        <div class="project-info">
                            <h3>Protal Miami</h3>
                            <p>protalmiami.com - Empresa de Servicios de Mantención</p>
                        </div>
                    </a>
                </div>

                <div class="project">
                    <a href="https://protalspa.cl" target="_blank" class="project-link">
                        <div class="project-image">
                            <img src="../assets/images/Proyecto5.png" alt="Protal Chile" class="project-image">
                        </div>
                        <div class="project-info">
                            <h3>Protal Chile</h3>
                            <p>protalspa.cl - Empresa de Servicios de Mantención</p>
                        </div>
                    </a>
                </div>

                <div class="project">
                    <a href="https://prosecuritychile.cl" target="_blank" class="project-link">
                        <div class="project-image">
                            <img src="../assets/images/Proyecto6.png" alt="Prosecurity Chile" class="project-image">
                        </div>
                        <div class="project-info">
                            <h3>Prosecurity Chile</h3>
                            <p>prosecuritychile.cl - Empresa de Seguridad Privada</p>
                        </div>
                    </a>
                </div>

            </div>
        </section>
    </main>

    <!-- Scripts -->
    <script src="js/recaptcha.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script> 
    <script src="js/cursor.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/neuro.js"></script>

</body>
</html>
