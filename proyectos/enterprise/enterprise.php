<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, min-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Upright:wght@300&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="./../../includes/css/style.css" type="text/css"/>
    <link rel="stylesheet" href="./../../includes/css/contacto.css" type="text/css"/>
    <link rel="stylesheet" href="./../../includes/fonts/style.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Portfolio María S Vielba</title>
</head>
<body>
<p class="logo"><i class="fas fa-code"></i> María S Vielba
        <span class="subtitulo">~ Diseño/Maquetación Web ~</span>
</p>
    <span class="nav-bar" id="btnMenu">
        <i class="fas fa-bars"></i>
    </span>
<header class="header">
        <nav class="main-nav">
            <ul class="menu" id="menu">
                <li class="menu-item"><a href="home.php" class="menu-link"><i class="fa fa-home"></i> Inicio</a></li>
                    <li class="menu-item container-submenu">
                        <a href="#" class="menu-link submenu-btn">
                            <i class="fas fa-user-graduate"></i> Formación 
                            <i class="fa fa-chevron-down icono"></i>
                        </a>
                            <ul class="submenu">
                                <li class="menu-item container-submenu">
                                    <a href="proyectos/domestika/domestika.php" class="menu-link submenu-btn"> ~ Domestika</a>
                                </li>
                                <li class="menu-item container-submenu">
                                    <a href="proyectos/enterprise/enterprise.php" class="menu-link submenu-btn"> ~ Enterprise Formación</a>
                                </li>
                                <li class="menu-item container-submenu">
                                    <a href="proyectos/foro/foro.php" class="menu-link submenu-btn"> ~ Foro Training</a>
                                </li>
                            </ul>
                    </li>
                <li class="menu-item"><a href="sobre-mi.php" class="menu-link"><i class="far fa-address-card site-nav--icon"></i> Sobre mi</a></li>
                <li class="menu-item"><a href="contacto.php" class="menu-link"><i class="fas fa-user-edit site-nav--icon"></i> Contacto</a></li>
            </ul>
        </nav>
</header>
<section class="contenido">
    <div class="columnas">
        <img class="im" src="certificado.png" alt="certificado">
        <h2><strong>Certificado:</strong></h2>
            <h2>~ Desarrollo de Aplicaciones con 
            <br>Tecnología Web ~</h2>
        <p><strong>Fecha:</strong> Abril / Diciembre 2019</p>
        <p>Madrid, Comunidad de Madrid</p>
        <h2><strong>Practicas:</strong></h2>
            <p><strong>Empresa:</strong> A&A Confección Informática.</p>
            <p><strong>Fecha:</strong> Diciembre-2019</p>
            <p>Alcorcón, Comunidad de Madrid.</p>
            <a href="../enterprise/carta.pdf">
            <i class="fas fa-file-pdf"></i></a>
            <span>Carta de Recomendación</span>       
    </div>
    <div class="columnas">
        <img class="im" src="programadora.jpg" alt="proyectos">
        <h2><strong>~ Proyectos de Maquetación Web:</strong></h2>
        <a class="bingo" href="../enterprise/maquetacion/proyectoflex/proyectoflex.php">Proyecto de Maquetación Flex</a>
        <br>
        <a class="bingo" href="../enterprise/maquetacion/proyectomassively/proyectomassively.php">Proyecto Massively</a>
        <h2><strong>~ Proyectos de PHP:</strong></h2>
        <a class="bingo" href="../enterprise/proyectos-php/bingo/proyectobingo.php">Generador de Cartones de Bingo</a>
        <br>
        <h2><strong>~ Proyectos adicionales:</strong></h2>       
    </div>
    <div class="columnas">
        <img class="im" class="empresa" src="empresa.jpg" alt="empresa">      
        <h2><strong>Acerca de Enterprise Formación:</strong></h2>
            <p>Es una empresa de ámbito nacional 
            con 10 años de antigüedad dedicada al desarrollo de actividades formativas 
            en su más amplia acepción.
            </p>
    </div>
</section>
<div class="footer">
    &copy; All rights reserved. Diseño de: María S Vielba&nbsp&nbsp
    <a href="./../../contacto.php">~ Contacto ~</a>
</div>
<a href="./../../home.php" id="home"><i class="fa fa-home"></i> Home</a>
<script src="./../../includes/js/menu.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
</body>
</html>




















