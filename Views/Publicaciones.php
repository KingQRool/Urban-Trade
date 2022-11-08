<?php
require '../Inc/Header.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Publicaciones</title>
<link href="../Public\css\styles.css" rel="stylesheet"/>
<link rel="stylesheet" href="../Public/css/stylepubli-tiend.css">
<script src="https://kit.fontawesome.com/357827b059.js" crossorigin="anonymous"></script>
</head>
<body id="page-top">
  <!-- Masthead o Cabecera -->
  <header class="masthead">
  <div class="container">
      <div class="masthead-subheading">¡Bienvenido A!</div>
      <div class="masthead-heading text-uppercase">Urban Trade Publicaciones</div>
      <a id="myAnchor" class="btn btn-primary btn-xl text-uppercase" href="#todaspublicaciones">EXPLORA TODAS LAS LAS PUBLICACIONES</a>
    </div>
  </header>
  <!-- CARROUSEL   Cambiar color de fondo style="background color" -->
  <section class="page-section" id="services">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">¡ PUBLICACIONES DESTACADAS !</h2>
      <p class="section-subheading text-muted"> " De La Semana "</p>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <p style="text-align: center;"><img src="https://img.freepik.com/fotos-premium/coleccion-bolas-helado_70626-4966.jpg?w=740" width="50%" class="" alt="..."> </p>
          <div class="carousel-caption d-none d-md-block">
            <div class="timeline-heading">
              <h4></h4>
            </div>
            <p></p>
          </div>
        </div>
        <div class="carousel-item">
          <p style="text-align: center;"> <img src="https://media.istockphoto.com/photos/colorful-candies-background-picture-id674582668?k=20&m=674582668&s=612x612&w=0&h=rmoBofYNOiokF2bQa1UZYzKfxB5L6Or1creA5uEOsjM=" width="50%" height="" class="" alt="..."> </p>
          <div class="carousel-caption d-none d-md-block">
            <h4></h4>
            <p></p>
          </div>
        </div>
        <div class="carousel-item">
          <p style="text-align: center;"> <img src="https://img.freepik.com/foto-gratis/magdalenas-chocolate-apetitosas_1203-1904.jpg?w=740&t=st=1663643594~exp=1663644194~hmac=309ef6a4804899e5dd60df0d70d8998057c12b4942aa9202fa68d88c967a9e1d" width="50%" height="" class="" alt="...">
          <div class="carousel-caption d-none d-md-block">
            </p>
            <h3>  </h3>
            <p></p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <!-- Tiendas -->
  <div class="container">
    <div class="container text-center">
      <div class="row" id="">
        <div class=" col-md-12" id="">
          <h1 class="text-center" id="todaspublicaciones">TODAS LAS PUBLICACIONES</h1>
        </div>
      </div><br><br>
      <a id="myAnchor" class="btn btn-primary btn-xl text-uppercase" href="Publicaciones\CrearPublicacion.php">CREAR UNA PUBLICAION</a>
      <br>
      <br>
      
      <div class="row" id="row">
   
      <div class="ui card">
    <?php foreach($p as $publicaciones) {}?>
  <div class="image">
    <img src="<?php echo $publicaciones->fotos_p; ?>">
  </div>
  <div class="content">
    <a class="header"><?php echo $publicaciones->nombre_p; ?></a>
    <div class="meta">
      <span class="text"><?php echo $publicaciones->info_p; ?><br>
      </span>
    </div>
    <div class="description">
    <?php echo $publicaciones->precios_p; ?>
    </div>
  </div>
  <div class="extra content">
    
  </div>
</div>

        <div class="col" id="col">
          <h2 class="ui center aligned header"><img src="https://sena.edu.co/Style%20Library/alayout/images/logoSena.png" alt="" width="100px"></h2>
          <p>Nombre Producto</p>
          <p>INFORMACION DEL PRODUCTO</p>
          <p>PRECIO</p>
          <p> ublicacion del sena Centro Mano factura Avanzada.</p>
          <br>
          <br>
        </div>
    
        <div class="col" id="col">
          <h2 class="ui center aligned header"><img src="https://sena.edu.co/Style%20Library/alayout/images/logoSena.png" alt="" width="100px"></h2>
          <p>Nombre Producto</p>
          <p>INFORMACION DEL PRODUCTO</p>
          <p>PRECIO</p>
          <p> ublicacion del sena Centro Mano factura Avanzada.</p>
          <br>
          <br>
        </div>
      </div>
      <div class="row" id="row">
        <div class="col" id="col">
          <h2 class="ui center aligned header"><img src="https://sena.edu.co/Style%20Library/alayout/images/logoSena.png" alt="" width="100px"></h2>
          <p>Nombre Producto</p>
          <p>INFORMACION DEL PRODUCTO</p>
          <p>PRECIO</p>
          <p> ublicacion del sena Centro Mano factura Avanzada.</p>
          <br>
          <br>
        </div>
        <div class="col" id="col">
          <h2 class="ui center aligned header"><img src="https://sena.edu.co/Style%20Library/alayout/images/logoSena.png" alt="" width="100px"></h2>
          <p>Nombre Producto</p>
          <p>INFORMACION DEL PRODUCTO</p>
          <p>PRECIO</p>
          <p> ublicacion del sena Centro Mano factura Avanzada.</p>
          <br>
          <br>
        </div>
        <div class="col" id="col">
          <h2 class="ui center aligned header"><img src="https://sena.edu.co/Style%20Library/alayout/images/logoSena.png" alt="" width="100px"></h2>
          <p>Nombre Producto</p>
          <p>INFORMACION DEL PRODUCTO</p>
          <p>PRECIO</p>
          <p> ublicacion del sena Centro Mano factura Avanzada.</p>
          <br>
          <br>
        </div>
      </div>
      <div class="row" id="row">
        <div class="col" id="col">
          <h2 class="ui center aligned header"><img src="https://sena.edu.co/Style%20Library/alayout/images/logoSena.png" alt="" width="100px"></h2>
          <p>Nombre Producto</p>
          <p>INFORMACION DEL PRODUCTO</p>
          <p>PRECIO</p>
          <p> ublicacion del sena Centro Mano factura Avanzada.</p>
          <br>
          <br>
        </div>
        <div class="col" id="col">
          <h2 class="ui center aligned header"><img src="https://sena.edu.co/Style%20Library/alayout/images/logoSena.png" alt="" width="100px"></h2>
          <p>Nombre Producto</p>
          <p>INFORMACION DEL PRODUCTO</p>
          <p>PRECIO</p>
          <p> ublicacion del sena Centro Mano factura Avanzada.</p>
          <br>
          <br>
        </div>
        <div class="col" id="col">
          <h2 class="ui center aligned header"><img src="https://sena.edu.co/Style%20Library/alayout/images/logoSena.png" alt="" width="100px"></h2>
          <p>Nombre Producto</p>
          <p>INFORMACION DEL PRODUCTO</p>
          <p>PRECIO</p>
          <p> ublicacion del sena Centro Mano factura Avanzada.</p>
          <br>
          <br>
        </div>
      </div>
      <div class="row" id="row">
        <div class="col" id="col">
          <h2 class="ui center aligned header"><img src="https://sena.edu.co/Style%20Library/alayout/images/logoSena.png" alt="" width="100px"></h2>
          <p>Nombre Producto</p>
          <p>INFORMACION DEL PRODUCTO</p>
          <p>PRECIO</p>
          <p> ublicacion del sena Centro Mano factura Avanzada.</p>
          <br>
          <br>
        </div>
        <div class="col" id="col">
          <h2 class="ui center aligned header"><img src="https://sena.edu.co/Style%20Library/alayout/images/logoSena.png" alt="" width="100px"></h2>
          <p>Nombre Producto</p>
          <p>INFORMACION DEL PRODUCTO</p>
          <p>PRECIO</p>
          <p> ublicacion del sena Centro Mano factura Avanzada.</p>
          <br>
          <br>
        </div>
        <div class="col" id="col">
          <h2 class="ui center aligned header"><img src="https://sena.edu.co/Style%20Library/alayout/images/logoSena.png" alt="" width="100px"></h2>
          <p>Nombre Producto</p>
          <p>INFORMACION DEL PRODUCTO</p>
          <p>PRECIO</p>
          <p> ublicacion del sena Centro Mano factura Avanzada.</p>
          <br>
          <br>
        </div>
      </div>
      <div class="row" id="row">
        <div class="col" id="col">
          <h2 class="ui center aligned header"><img src="https://sena.edu.co/Style%20Library/alayout/images/logoSena.png" alt="" width="100px"></h2>
          <p>Nombre Producto</p>
          <p>INFORMACION DEL PRODUCTO</p>
          <p>PRECIO</p>
          <p> ublicacion del sena Centro Mano factura Avanzada.</p>
          <br>
          <br>
        </div>
        <div class="col" id="col">
          <h2 class="ui center aligned header"><img src="https://sena.edu.co/Style%20Library/alayout/images/logoSena.png" alt="" width="100px"></h2>
          <p>Nombre Producto</p>
          <p>INFORMACION DEL PRODUCTO</p>
          <p>PRECIO</p>
          <p> ublicacion del sena Centro Mano factura Avanzada.</p>
          <br>
          <br>
        </div>
        <div class="col" id="col">
          <h2 class="ui center aligned header"><img src="https://sena.edu.co/Style%20Library/alayout/images/logoSena.png" alt="" width="100px"></h2>
          <p>Nombre Producto</p>
          <p>INFORMACION DEL PRODUCTO</p>
          <p>PRECIO</p>
          <p> ublicacion del sena Centro Mano factura Avanzada.</p>
          <br>
          <br>
        </div>
      </div>
      
      <div class="ui right floated pagination menu">
            <a class="icon item">
            <i class="fa-solid fa-arrow-left"></i>
            </a>
            <a class="item">1</a>
            <a class="item">2</a>
            <a class="item">3</a>
            <a class="item">4</a>
            <a class="icon item">
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
    </div>
  </div>

  <!-- Vacio por el momento -->
  <br>
  <br>
  <!-- Contact o Contacto -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Contactanos</h2>
        <h3 class="section-subheading text-muted">Utiliza este espacio para escribirnos un mensaje personal como una critica, sugerencia o agradecimientos, Esto lo hacemos para interactuar mas con nuestros usuarios y mejorar tu experiencia.</h3>
      </div>
      <form id="contactForm" data-sb-form-api-token="API_TOKEN">
        <div class="row align-items-stretch mb-5">
          <div class="col-md-6">
            <div class="form-group">
              <!-- Name o Nombre input -->
              <input class="form-control" id="name" type="text" placeholder="Tu Nombre *" data-sb-validations="required" />
              <div class="invalid-feedback" data-sb-feedback="name:required">Un Nombre Es Requerido.</div>
            </div>
            <div class="form-group">
              <!-- Email address o Correo input-->
              <input class="form-control" id="email" type="email" placeholder="Tu E-mail *" data-sb-validations="required,email" />
              <div class="invalid-feedback" data-sb-feedback="email:required">Un E-mail Es Requerido.</div>
              <div class="invalid-feedback" data-sb-feedback="email:email">El E-mail No Es Valido.</div>
            </div>
            <div class="form-group mb-md-0">
              <!-- Phone number o Telefono input-->
              <input class="form-control" id="phone" type="number" placeholder="Tu Telefono *" data-sb-validations="required" />
              <div class="invalid-feedback" data-sb-feedback="phone:required">Un Numero Es Requerido.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group form-group-textarea mb-md-0">
              <!-- Message input-->
              <textarea class="form-control" id="message" placeholder="Tu Mensaje *" data-sb-validations="required"></textarea>
              <div class="invalid-feedback" data-sb-feedback="message:required">Un Mensaje Es Requerido.</div>
            </div>
          </div>
        </div>
        <!-- Submit success message-->
        <!---->
        <!-- This is what your users will see when the form-->
        <!-- has successfully submitted-->
        <div class="d-none" id="submitSuccessMessage">
          <div class="text-center text-white mb-3">
            <div class="fw-bolder">Form submission successful!</div>
            To activate this form, sign up at
            <br />
            <a href="https://startbootstrap.com/solution/contact-forms"></a>
          </div>
        </div>
        <!-- Submit error message-->
        <!---->
        <!-- This is what your users will see when there is-->
        <!-- an error submitting the form-->
        <div class="d-none" id="submitErrorMessage">
          <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>
        <!-- Submit Button-->
        <div class="container">
          <p style="text-align: center;"> <button class="btn btn-primary btn-xl text-uppercase" href="#">Enviar Mensaje</button></p>
        </div>
      </form>
    </div>
  </section>
  <!-- Footer-->
  <footer class="footer py-4">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 text-lg-start">Copyright &copy; Urban Trade 2022</div>
        <div class="col-lg-4 my-3 my-lg-0">

        </div>
        <div class="col-lg-4 text-lg-end">
          <a class="link-dark text-decoration-none me-3" href="ListadoPersonas.php">Politicas De Privacidad</a>
          <a class="link-dark text-decoration-none" href="#!">Terminos De Uso</a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="Public\js\scripts.js"></script>

  <!-- * * SB Forms JS    * *-->

  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  

</body>

</html>
<?php
require '../Inc/Footer.php';
?>