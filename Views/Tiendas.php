<?php
require '../Inc/Header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tiendas</title>
<link href="../Public\css\styles.css" rel="stylesheet"/>
</head>

<body id="page-top">
  <!-- Masthead o Cabecera -->
  <header class="masthead">
    <div class="container">
      <div class="masthead-subheading">¡Bienvenido A!</div>
      <div class="masthead-heading text-uppercase">Urban Trade Tiendas</div>
      <a id="myAnchor" class="btn btn-primary btn-xl text-uppercase" href="#todastiendas">EXPLORA TODAS LAS TIENDAS</a>
    </div>
  </header>
  <!-- CARROUSEL   Cambiar color de fondo style="background color" -->
  <section class="page-section" id="services">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">¡ TIENDAS DESTACADAS !</h2>
      <p class="section-subheading text-muted"> " De La Semana"</p>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <p style="text-align: center;"><img src="https://img.freepik.com/foto-gratis/personal-femenino-pie-brazos-cruzados-supermercado_107420-63706.jpg?w=740&t=st=1663644576~exp=1663645176~hmac=153cca67d19dded154708fdf9d0048616ba3c467a5e2c804ae9a01bb9f9b8844" width="50%" class="" alt="..."> </p>
          <div class="carousel-caption d-none d-md-block">
            <div class="timeline-heading">
              <h4>Intuitivo y acil de Usar</h4>
            </div>
            <p></p>
          </div>
        </div>
        <div class="carousel-item">
          <p style="text-align: center;"> <img src="https://img.freepik.com/fotos-premium/vendedor-posa-tienda-herramientas-electricas_94347-1102.jpg?w=740" width="50%" height="" class="" alt="..."> </p>
          <div class="carousel-caption d-none d-md-block">
            <h4> Realiza Ventas En Cualquier Momento Del Dia </h4>
            <p></p>
          </div>
        </div>
        <div class="carousel-item">
          <p style="text-align: center;"> <img src="https://img.freepik.com/foto-gratis/mujer-tiro-completo-compras-mercado_23-2149148466.jpg?w=740&t=st=1663644664~exp=1663645264~hmac=6a925abbd7358bc3748e79bc85afa93b848245699a92f9ab5ea52eae0df2b90d" width="50%" height="" class="" alt="...">
          <div class="carousel-caption d-none d-md-block">
            </p>
            <h3> Maneja Tu Propio Horario </h3>
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
  <!-- Services o Serv-->

  <!-- Tiendas -->
  <h1 class="text-center" id="todastiendas">TODAS LAS TIENDAS</h1>
  <table class="ui celled padded table">
    <tbody>
      <tr>
        <td>
          <h2 class="ui center aligned header"><img src="https://sena.edu.co/Style%20Library/alayout/images/logoSena.png" alt="" width="100px"></h2>
        </td>
        <td class="single line">
          <p>Tienda Sena</p> 
        </td>
        <td>
          <div class="ui star rating" data-rating="3" data-max-rating="3"><p> Tienda del sena Centro Mano factura Avanzada. </p></div>
        </td>
        <td class="right aligned">
          <a href="#">RESEÑAS</a>
        </td>
        <td><p>DESCRIPCION DE LA TIENDA</p></td>
      </tr>
      <br>
      <tr>

        <td>
          <h2 class="ui center aligned header"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAsVBMVEU6WJ7//////f86WZv///0vU5k5WKD4//+DkrwzTpX1/P83Wp87V6AoQpT//P///f17ircuUZvHz+H///k5WpkpTJWOnr+rudY7VqQ4WKTw+/+Kl75sf6szUZ6PncYvU5VRYp9teqvr8vwuQ4v///U4UaFVZJoySZhkda0rTZCywNjX3u+xu9oqRYc2W5oqSZ+nr8V8iLl8iq/I1uLd5vC/x+GcqMNVbZhxfqGClLVVbaarcTBeAAADGklEQVR4nO3c7XLaOBhAYcmSlYJVEyPT4CyUTZqEfqS0Tb+W3v+F1QoEm7zZ3Zn+qHdW58nwg8xkxpyxjSRElAIAAAAAAAAAAAAAAAAAAAAAAAAAAMCvMy3lHnivVFEMfUxDix384ZlXtVdmwMP5T6hN4Vw8UfZP6/l82AMaXrxg8rx6sMxXziR+nrhqPfvz4tmLzsuVSvZ+4pxRzax+Mb3UR05eNf7f//r/yBnXmGV9dq4fycbPUz1N5qZoqovLcEWTA1+40ULrMqPJgVHXN+PwOEjaTYpiPbWlDZYmB371WoseiTdRb95amhwrRpdP3U2SbuL905dOyk3y13rSC1FeWbs7b0I7jk00Sr7Qk96JUup3t2fR7e3ZyCU6B8yf9ZtM9Nv36+WstZy9mSc63YlNeu87Vt+YTdH4plEb47wb+uiG8ajJeNQYU7eM93Wil05s0pvq2JORN/6wIJuo2MT2myiT6BXTEU0cTWgitU00185OvWmWcX3+w1aH7iYbxq+q1cPSfWKj2ML5fHF67+PRe3H26fTuU/z13d3pKq0TplDz9eeHOY7uJsbhqruQzt83Qx/mb+XqZt8kLrD1J8aTrP1pZeHLrElq0NbUpm1iW/p4RSnYsn20JvbzOq0mZm5mU/037O7xdWaSGsr+Y5O9s6qmyZGJ/lZxnhzL9DaxJqrpmhzdZA/33EwvmiKpJvN6s57GAHF00mtibRaCDZH+7tLaV+Brt57uXvvRJxmTsgyhjOOToG8S26bUjmNn3Ti2tx7breGf1/O09rO1L9Ys/oi2H/vDWDv+a7F3kd782GzyKm+tt73pTlwruK7irra88kWhkquyw9qjxDqbRBOJJhJNJJpINJFoItFEoolEE4kmEk0kmkg0kWgi0USiiUQTiSYSTSSaSDSRaCLRRKKJRBOJJhL77aV8e79f614IYbwqVGJ7caTlVl/tmmRZWU5OVi7VHRad6+3huom7qk9WTVq7k57ifxz+f9K92vvkmxi13H9jJ+5aqpYb5RP73g4AAAAAAAAAAAAAAAAAAAAAAAAAAACAIf0EWKs0ckicGv8AAAAASUVORK5CYII" alt="" width="100px"></h2>
        </td>
        <td class="single line">
          Facebook
        </td>
        <td>
          <div class="ui star rating" data-rating="3" data-max-rating="3"><p> Tienda del sena Centro Mano factura Avanzada. </p></div>
        </td>
        <td class="right aligned">
          <a href="#">RESEÑAS</a>
        </td>
        <td>DESCRIPCION DE LA TIENDA</td>
      </tr>
      <tr>
        <td>
          <h2 class="ui center aligned header"><img src="https://sena.edu.co/Style%20Library/alayout/images/logoSena.png" alt="" width="100px"></h2>
        </td>
        <td class="single line">
          Tienda Sena
        </td>
        <td>
          <div class="ui star rating" data-rating="3" data-max-rating="3"><p>Tienda del sena Centro Mano factura Avanzada.</p></div>
        </td>
        <td class="right aligned">
          <a href="#">RESEÑAS</a>
        </td>
        <td>DESCRIPCION DE LA TIENDA</td>
      </tr>
      <br>
      <tr>
      <tr>
        <td>
          <h2 class="ui center aligned header"><img src="https://sena.edu.co/Style%20Library/alayout/images/logoSena.png" alt="" width="100px"></h2>
        </td>
        <td class="single line">
          Tienda Sena
        </td>
        <td>
          <div class="ui star rating" data-rating="3" data-max-rating="3"><p> Tienda del sena Centro Mano factura Avanzada. </p></div>
        </td>
        <td class="right aligned">
          <a href="#">RESEÑAS</a>
        </td>
        <td>DESCRIPCION DE LA TIENDA</td>
      </tr>
      <br>
      <tr>
      <tr>
        <td>
          <h2 class="ui center aligned header"><img src="https://sena.edu.co/Style%20Library/alayout/images/logoSena.png" alt="" width="100px"></h2>
        </td>
        <td class="single line">
          Tienda Sena
        </td>
        <td>
          <div class="ui star rating" data-rating="3" data-max-rating="3"><p> Tienda del sena Centro Mano factura Avanzada. </p></div>
        </td>
        <td class="right aligned">
          <a href="#">RESEÑAS</a>
        </td>
        <td>DESCRIPCION DE LA TIENDA</td>
      </tr>
      <br>
      <tr>
      <tr>
        <td>
          <h2 class="ui center aligned header"><img src="https://sena.edu.co/Style%20Library/alayout/images/logoSena.png" alt="" width="100px"></h2>
        </td>
        <td class="single line">
          Tienda Sena
        </td>
        <td>
          <div class="ui star rating" data-rating="3" data-max-rating="3"><p> Tienda del sena Centro Mano factura Avanzada. </p></div>
        </td>
        <td class="right aligned">
          <a href="#">RESEÑAS</a>
        </td>
        <td>DESCRIPCION DE LA TIENDA</td>
      </tr>
      <br>
      <tr>
      <tr>
        <td>
          <h2 class="ui center aligned header"><img src="https://sena.edu.co/Style%20Library/alayout/images/logoSena.png" alt="" width="100px"></h2>
        </td>
        <td class="single line">
          Tienda Sena
        </td>
        <td>
          <div class="ui star rating" data-rating="3" data-max-rating="3"><p> Tienda del sena Centro Mano factura Avanzada. </p></div>
        </td>
        <td class="right aligned">
          <a href="">RESEÑAS</a>
        </td>
        <td>DESCRIPCION DE LA TIENDA</td>
      </tr>
      <br>
      <tr>
    </tbody>
    <tfoot>
      <tr>
        <th colspan="5">
          <div class="ui right floated pagination menu">
            <a class="icon item">
              <i class="left chevron icon"></i>
            </a>
            <a class="item">1</a>
            <a class="item">2</a>
            <a class="item">3</a>
            <a class="item">4</a>
            <a class="icon item">
              <i class="right chevron icon"></i>
            </a>
          </div>
        </th>
      </tr>
    </tfoot>
  </table>
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