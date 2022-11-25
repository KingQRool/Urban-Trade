<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/357827b059.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Public/Css/semantic.css">
    <link rel="stylesheet" href="../Public/Css/publicaciones.css">
    <link rel="stylesheet" href="../Public/css/bootstrap.min.css">
    <script src="../Public/Js/jquery-3.1.1.min.js"></script>
    <link href="../Public\Css\styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="../Public/Css/publicacionesnolog.css">


</head> 

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="../../Index.php">
                    <img src="../Public/Img/logourbantrade.png" style="height: 40px;" alt="*AQUI VA EL LOGO*" id="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link"
                                href="../Index.php">Inicio</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
    

    <h1 class="titulo">Publicaciones</h1>

    <section class="page-section" id="contact">
                <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase" >¿Deseas Realizar Una Publicación?</h2>
                    <h3 class="section-subheading text-muted">Debes De Estar Registrado Para Llevar a Cabo Una Publicación</h3>
                    <h4 class="section-subheading text-muted">Registrate Ahora:</h4>
                    <div class="Inicio">
        <button class="center">
            <span>
                <a
                    href="http://localhost/Proyecto Git/Urban-Trade/Controllers/UsersController.php?action=register">
                    REGISTRARME
                </a>
            </span>
        </button>
    </div>
                </div>
    </section>
    <br><br>

    <?php foreach ($objetoretornadopublication as $publication) { ?>



    <div class="mainWrapper">
        <div class="wrapBox">
            <div class="test">
                <ul class="product-grid clear">
                    <li>
                        <div class="product-box">
                            <div class="product-image">
                                <a href="#"> <img src="<?php echo $publication->fotos_p_url; ?>" /></a>
                            </div>
                            <div class="product-details">
                            <p class="product-name" style="text-transform: capitalize;"> publicado por:  <?php echo $publication->nombre_u; ?> </p>
                                <h2 class="product-name"><a><?php echo $publication->nombre_p; ?></a></h2>
                                <div class="product-rating">
                                    <span class="product-star-rating" style="width:100%;">5 out of 5 stars</span>
                                </div>
                            </div>
                        </div><!-- close .product-basic -->
                    </li>

                    <li>
                        <div class="product-box">
                            <div class="product-details">
                                <h2 class="product-name"><a>DESCRIPCION</a></h2>
                                <div class="product-price">
                                    <span class="price"><?php echo $publication->info_p; ?></span>
                                </div>
                                <div class="product-rating">
                                    <span class="product-star-rating" style="width:100%;">5 out of 5 stars</span>
                                </div>
                            </div>
                        </div><!-- close .product-basic -->
                    </li>

                    <li>
                        <div class="product-box">
                            <div class="product-details">
                                <h2 class="product-name"><a>PRECIO</a></h2>
                                <div class="product-price">
                                    <span class="price"><?php echo $publication->precios_p; ?></span>
                                </div>
                                <div class="product-rating">
                                    <span class="product-star-rating" style="width:100%;">5 out of 5 stars</span>
                                </div>
                            </div>
                        </div><!-- close .product-basic -->
                    </li>
                </ul><!-- close .product-grid -->
            </div><!-- close .container -->
        </div>
    </div>

    <?php } ?>
    <script>
$('.ui.dropdown').dropdown();
</script>

<script>
window.addEventListener('DOMContentLoaded', event => {
// función de reducción de la barra de navegación
var navbarShrink = function () {
    const navbarCollapsible = document.body.querySelector('#mainNav');
    if (!navbarCollapsible) {
        return;
    }
    if (window.scrollY === -10000) {
        navbarCollapsible.classList.remove('navbar-shrink')
    } else {
        navbarCollapsible.classList.add('navbar-shrink')
    }
};
// Reducir la barra de navegación
navbarShrink();

// Reducir la barra de navegación cuando se desplaza la página
document.addEventListener('scroll', navbarShrink);

// Activar Bootstrap scrollspy en el elemento de navegación principal

// const mainNav = document.body.querySelector('#mainNav');
// if (mainNav) {
//     new bootstrap.ScrollSpy(document.body, {
//         target: '#mainNav',
//         offset: 74,
//     });
// };

// Contraer la barra de navegación receptiva cuando el alternador está visible
const navbarToggler = document.body.querySelector('.navbar-toggler');
const responsiveNavItems = [].slice.call(
    document.querySelectorAll('#navbarResponsive .nav-link')
);
responsiveNavItems.map(function (responsiveNavItem) {
    responsiveNavItem.addEventListener('click', () => {
        if (window.getComputedStyle(navbarToggler).display !== 'none') {
            navbarToggler.click();
        }
    });
});
});
</script>
</body>

</html>
