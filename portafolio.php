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
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/logo.css">
    <link rel="stylesheet" href="assets/css/about.css"> <!-- Hoja de estilo sobre nosotros -->
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

        <?php include("views/about.php"); ?>


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

                <div class="project">
                    <a href="https://stoikspa.cl" target="_blank" class="project-link">
                        <div class="project-image">
                            <img src="../assets/images/Proyecto7.png" alt="Stoik" class="project-image">
                        </div>
                        <div class="project-info">
                            <h3>Stoik SpA</h3>
                            <p>stoikspa.cl - Empresa Backoffice</p>
                        </div>
                    </a>
                </div>

                <div class="project">
                    <a href="https://factory13.cl" target="_blank" class="project-link">
                        <div class="project-image">
                            <img src="../assets/images/Proyecto10.png" alt="Factory 13" class="project-image">
                        </div>
                        <div class="project-info">
                            <h3>Factory 13</h3>
                            <p>factory13.cl - Productora de Eventos</p>
                        </div>
                    </a>
                </div>

                <div class="project">
                    <a href="https://minaer.cl" target="_blank" class="project-link">
                        <div class="project-image">
                            <img src="../assets/images/Proyecto8.png" alt="Minaer" class="project-image">
                        </div>
                        <div class="project-info">
                            <h3>Minaer</h3>
                            <p>minaer.cl - Empresa de Seguridad Privada</p>
                        </div>
                    </a>
                </div>

                <div class="project">
                    <a href="https://formaplus.cl" target="_blank" class="project-link">
                        <div class="project-image">
                            <img src="../assets/images/Proyecto9.png" alt="Formaplus" class="project-image">
                        </div>
                        <div class="project-info">
                            <h3>Formaplus</h3>
                            <p>formaplus.cl - OTEC</p>
                        </div>
                    </a>
                </div>

            </div>
        </section>

        <section id="video-edits">
            <h2>Videos Editados</h2>
            <div class="projects-grid">

                <!-- Video 1 -->
                <div class="project">
                    <div class="project-image">
                        <iframe width="100%" height="215" 
                                src="https://www.youtube.com/embed/xsAKaGsIKK8" 
                                title="Video Promocional" frameborder="0" 
                                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                        </iframe>
                    </div>
                    <div class="project-info">
                        <h3>Video Promocional</h3>
                        <p>Video Promocional para Campaña de Agua Embotellada.</p>
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="project">
                    <div class="project-image">
                        <iframe width="100%" height="215" 
                                src="https://www.youtube.com/embed/c07ObHWAtCU" 
                                title="Evento Lanzamiento Yetwater" frameborder="0" 
                                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                        </iframe>
                    </div>
                    <div class="project-info">
                        <h3>Evento Lanzamiento Yetwater</h3>
                        <p>Resumen de lo que fuel el Evento de Lanzamiento de Yetwater.</p>
                    </div>
                </div>

                <!-- Video 3 -->
                <div class="project">
                    <div class="project-image">
                        <iframe width="100%" height="215" 
                                src="https://www.youtube.com/embed/kpO76KxPGYw" 
                                title="Video Promocional Marching Bands" frameborder="0" 
                                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                        </iframe>
                    </div>
                    <div class="project-info">
                        <h3>Video Promocional Marching Bands</h3>
                        <p>Promocion Concurso de Batalla de Bandas de Guerra.</p>
                    </div>
                </div>

                <!-- Video 4 -->
                <div class="project">
                    <div class="project-image">
                        <iframe width="100%" height="215" 
                                src="https://www.youtube.com/embed/2ESljlXtmk0" 
                                title="Video Capital Semilla RSP Chile" frameborder="0" 
                                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                        </iframe>
                    </div>
                    <div class="project-info">
                        <h3>Video Capital Semilla RSP Chile</h3>
                        <p>Video de Presentación Proyecto de RSP Chile para Capital Semilla.</p>
                    </div>
                </div>

                <!-- Video 5 -->
                <div class="project">
                    <div class="project-image">
                        <iframe width="100%" height="215" 
                                src="https://www.youtube.com/embed/8go6UgE7YFM" 
                                title="Video Promoción RSP para Guardias 1" frameborder="0" 
                                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                        </iframe>
                    </div>
                    <div class="project-info">
                        <h3>Video Promoción RSP para Empresas</h3>
                        <p>Video Promocionando RSP Chile para Empresas.</p>
                    </div>
                </div>

                
                <!-- Video 6 -->
                <div class="project">
                    <div class="project-image">
                        <iframe width="100%" height="215" 
                                src="https://www.youtube.com/embed/__Cw4f_ifw0" 
                                title="Video Promoción RSP para Guardias" frameborder="0" 
                                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                        </iframe>
                    </div>
                    <div class="project-info">
                        <h3>Video Promoción RSP para Guardias 2</h3>
                        <p>Video Promocionando RSP Chile para Guardias.</p>
                    </div>
                </div>

            </div>
        </section>
        
      <?php include("views/footer.php"); ?>
    </main>

    <!-- Scripts -->
    <script src="js/recaptcha.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script> 
    <script src="js/cursor.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/neuro.js"></script>

</body>
</html>
