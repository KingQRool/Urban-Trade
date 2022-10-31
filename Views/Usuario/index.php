<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Urban Trade</title>
        <link rel="icon" type="image/x-icon" href="../Public/img/crear.jpg" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Tema principal CSS -->
        <link href="../Public\css\styles.css" rel="stylesheet"/>
    </head>
    <body id="page-top">
        <!-- Navegacion -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">
                    <img src="../Public/img/logourbantrade.png" style="height: 40px;" alt="*AQUI VA EL LOGO*" id="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="../index.html"> Cerrar Sesión </a></li>
                        <li class="nav-item"><a class="nav-link" href="http://localhost/PROYECTO%20URBAN%20TRADE/Proyecto%200.4/Views/Publicaciones.php">Publicaciones</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://localhost/PROYECTO%20URBAN%20TRADE/Proyecto%200.4/Views/Tiendas.php">Tiendas U.T</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead o Cabecera -->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">¡Bienvenido A!</div>
                <div class="masthead-heading text-uppercase">Urban Trade</div>
               <div class="masthead-subheading"> <p><?php echo $_SESSION['nombreu'];?></p></div>

    
            </div>
        </header>
        <!-- CARROUSEL   Cambiar color de fondo style="background color" -->
    <section class="page-section" id="services" >
        <div class="text-center">
            <h2 class="section-heading text-uppercase">¡ FORMA PARTE DE NUESTRA FAMILIA !</h2>
            <p class="section-subheading text-muted"> "Tu personalidad es tu marca"</p>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
            <div class="carousel-item active">
            <p style="text-align: center;"><img src="https://img.freepik.com/foto-gratis/linda-chica-camisa-beige-tocando-gafas-sosteniendo-portatil-sonrisa_197531-6704.jpg?w=740&t=st=1660162231~exp=1660162831~hmac=52f53d54af7e566dfab0102655b970c3396a3c6c1cf463b82af8da92ca811747" width="50%" class="" alt="..."> </p> 
                <div class="carousel-caption d-none d-md-block">
                    <div class="timeline-heading">
                        <h4>Intuitivo y Facíl de Usar</h4>
                        
                    </div>
                <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <p  style="text-align: center;"> <img src="https://img.freepik.com/foto-gratis/freelancer-feliz-tableta-computadora-portatil-cafeteria_342744-942.jpg?w=740&t=st=1660162371~exp=1660162971~hmac=e56d0bfc3e0cafeaa121e7b2df6db926de214b1c5cf8dd6ba5510c7b2a4dbe83" width="50%"  height="" class="" alt="..."> </p>
                <div class="carousel-caption d-none d-md-block">
                <h4> Realiza Ventas En Cualquier Momento Del Dia </h4>
                <p></p>
                </div>
                </div>
            <div class="carousel-item">
                <p  style="text-align: center;"> <img src="https://img.freepik.com/foto-gratis/chica-joven-gerente-cambiando-cartel-cerrado-abierto-cafeteria-puerta-mirando-afuera-esperando-clientes-despues-cierre_7861-3174.jpg?w=900&t=st=1660163874~exp=1660164474~hmac=1ebe748a257ee0f3e4e74a25c4cd7b73274cb00eaf3bc1a1f4f18c325df1c540" width="60%" height=""  class="" alt="..."> 
                <div class="carousel-caption d-none d-md-block"> </p> 
                <h3> Maneja Tu Propio Horario  </h3>
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
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Nuestros Servicios</h2>
                    <p class="text-muted"> Algunos de nuestros servicios son; ver Publicaciones, crear publicaciones, facilitar el comercio web entre los emprededores del sena, ya sean los propios estudiantes o las tiendas distribuidas en la zona del sena, ademas de las tiendas aledañas</p>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-secundary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Visualización de productos</h4>
                        <p class="text-muted">En Urban Trade se va a hacer la Visualización de productos dados por aquellas personas que deseén empredender, tiendas dentro de la zona del sena pedregal y tiendas al rededor de la universidad, todas estas cosas se podran ver con detalle, desde precio, cantidad, lugar donde se encuetra el producto, imagen del lugar, y mucho mas!</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-secundary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Responsive para la movilidad del usuario</h4>
                        <p class="text-muted">El termino responsive (adaptable) esto significa la facilidad y la adaptibilidad para la movilidad del usuarion en los diferentes dispositivos que puede tener el usuario, smarthphone, portatil, tablets, etc.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-secundary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Manera segura de subir los productos</h4>
                        <p class="text-muted">En Urban Trade se va a mantener de una manere segura la informacion del usuario, ya sean: tiendas, emprendedores o compradores para tener una pagina totalmente confiable</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
            
                </div>
            </div>
        </section>
        <!-- instructions o Instrucciones -->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Instrucciones</h2>
                    <h3 class="section-subheading text-muted"> “Cada momento es un nuevo comienzo.”</h3>
                    
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../Public/img/iniciarsesion.jpg" alt="Inicio registro" style="height: 100%;"/></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Registro/</h4>
                                <h4 class="subheading">Inicio sesión</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">1. Al entrar a la pagina dirijete al apartado de "registro", ingresa tus datos.</p>
                                <p>2.Una vez registrado, ingrese los datos en nuestra sección de "inicar sesión"</p>
                            </div>
                        </div>
                        </li>     
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../Public/img/publicacion.PNG" alt="Inicio registro" style="height: 100%;"/></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Ver Publicaciones</h4>
                                <h4 class="subheading"></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">EN LA BARRA DE TAREAS APARECERA EL APARTADO DE PUBLICACIONES Y TIENDAS U.T,INGRESA Y DISFRUTA</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../Public/img/crear.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Crear Publicaciones</h4>
                                <h4 class="subheading"></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">AL ESTAR REGISTRADO DIRIGETE AL APARTADO DE PUBLICACIONES,SELECCIONA LA OPCION DE NUEVA PUBLICACION Y LISTO REALIZALA</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../Public/img/tienda.PNG" alt="" style="height: 100%;"/></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Agregar Tienda</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">AL ESTAR REGISTRADO DIRIGETE AL APARTADO DE TIENDAS,SELECCIONA LA OPCION DE AGREGAR TIENDA Y LISTO.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                ¡Ahora si
                                <br />
                                Listo para Usar
                                <br />
                                Urban Trade!
                                <br />
                            </h4>
                        </div>
                    </li>
                </li>
            </div>
        </section>
        <!-- Team o Equipo -->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Nuestro Equipo De Trabajo</h2>
                    <p class="section-subheading text-muted"></p>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="../Public/img/integrante1.jpeg" alt="..." />
                            <h4>Juan Esteban Rendon </h4>
                            <p class="text-muted">"Me perdí en el segundo trimestre"</p>
                            <p class="text-muted"></p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="../Public/img/integrante2.jpeg" alt="..." />
                            <h4>Edier Mauricio Giraldo</h4>
                            <p class="text-muted">"Esperenado sobrevivir a la entrega de fase"</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://github.com/EYIYER"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="../Public/img/integrante3.jpeg" alt="Miguel Angel Vasquez" />
                            <h4>Miguel Angel Vasquez</h4>
                            <p class="text-muted">"Almost Programmer"</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://github.com/MykeVasquez09" aria-label="Larry Parker Twitter Profile"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted"></p></div>
                </div>
            </div>
        </section>
        <!-- Vacio por el momento -->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                     
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <A href="https://www.sena.edu.co/es-co/Paginas/default.aspx"><img class="img-fluid img-brand d-block mx-auto" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Sena_Colombia_logo.svg/1200px-Sena_Colombia_logo.svg.png"  alt="..." aria-label="IBM Logo" /></A>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        
                    </div>
                </div>
            </div>
        </div>
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
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="container">
                    <p style="text-align: center;"> <button  class="btn btn-primary btn-xl text-uppercase" href="#">Enviar Mensaje</button></p>
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
        <script src="../Public\js\scripts.js"></script>
    
        <!-- * * SB Forms JS    * *-->
        
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    </body>
</html>
