<?php
// include '../PublicationController'
foreach ($objetoretornadopublicacion as $publicacion) {
  // ...
  }
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Public\css\register.css">
    <script src="https://kit.fontawesome.com/357827b059.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<body class="align">
<div class="Inicio">
    <a href="../index.html">
      <i class="fa-solid fa-house"></i>
      INICIO 
    </a>
</div>
<div class="grid">

  <form action="../../Controllers/PublicationController.php" method="POST" class="form login">

    <div class="form__field">
    <input type="text" class="input" name="nombrej" id="nombrej" placeholder="Ingrese Su Nombre" value="<?php echo $publicacion->nombre_p; ?>" required>
            <label for="" class="label">Ingrese Su Nombre</label>
    </div>
    
    <input type="hidden" name="action" value="confirm">
    <input type="hidden" name="id_p" value="act">
    <div class="form__field">
    <input type="text" class="input" name="nombrej" id="nombrej" placeholder="Ingrese Su Nombre" value="<?php echo $publicacion->info_p; ?>" required>
            <label for="" class="label">Ingrese La Nueva Información</label>
    </div>

    <div class="form__field">
    <input type="text" class="input" name="nombrej" id="nombrej" placeholder="Ingrese Su Nombre" value="<?php echo $publicacion->fotos_p; ?>" required>
            <label for="" class="label">Ingrese La Nueva Foto</label>
    </div>
    

    <div class="form__field">
    <input type="text" class="input" name="nombrej" id="nombrej" placeholder="Ingrese Su Nombre" value="<?php echo $publicacion->precio_p; ?>" required>
            <label for="" class="label">Ingrese El Nuevo Precio</label>
    </div>


    <div class="form__field">
      <input type="submit" value="Actualizar Producto">
    </div>

  </form>

  <p class="text--center">Ya tienes cuenta? <a href="login.php">Inicia Sesion</a> <svg class="icon">
      <use xlink:href="#icon-arrow-right"></use>
    </svg></p>

</div>




<!-- //  ICONO PRODUCTO  -->
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16"> 
<symbol id="icon-basket">
  <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/> </symbol>
</svg>
<!-- //  ICONO PRODUCTO  -->

<!-- ICONO INFORMACION -->
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-question" viewBox="0 0 16 16">
<symbol id="icon-info">
  <path d="M8.05 9.6c.336 0 .504-.24.554-.627.04-.534.198-.815.847-1.26.673-.475 1.049-1.09 1.049-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.71 1.71 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745z"/>
  <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"/>
  <path d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0z"/>
  </symbol>
</svg>

<!-- ICONO INFORMACION -->

<!-- ICONO IMAGEN -->
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
<symbol id="icon-photo">
  <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
  <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/></symbol>
</svg>
<!-- ICONO IMAGEN -->

<!-- ICONO PRECIO -->
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
<symbol id="icon-price">
  <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
</svg></symbol>
<!-- ICONO PRECIO -->
</body>
</body>
</html>