<?php 
include '../Inc/Header.php';
if(empty($_SESSION['nombre_u'])){
  //echo 'logueese';
  $isc = new SesionController();
  $isc->RedireccionarUsuarios();
  
}
?>
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

</head>

<body>

    <h1 class="titulo">Publicaciones</h1>
    <br><br>
    <div class="Inicio">
        <button class="center">
            <span>
                <a
                    href="http://localhost/Proyecto Git/Urban-Trade/Controllers/PublicationsController.php?action=insert">
                    AGREGAR PUBLICACION
                </a>
            </span>
        </button>
    </div>
    <?php foreach ($objetoretornadopublication as $publication) { ?>

    <div class="mainWrapper">
        <div class="wrapBox">
            <div class="test">
                <ul class="product-grid clear">
                    <li>
                        <div class="product-box">
                            <div class="product-image">
                                <a> <img src="<?php echo $publication->fotos_p_url; ?>" /></a>
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
</body>

</html>
<?php 
include '../Inc/Footer.php';
?>