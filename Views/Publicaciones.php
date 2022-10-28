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
      </div>
      <br>
      <br>
      
      <div class="row" id="row">
   
        <div class="col" class="text-center" id="col">
          <h2 class="ui center aligned header"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOMAAADeCAMAAAD4tEcNAAAAkFBMVEX/////Zxn/WAD/ZRT/WwD/XwD/cjD/VgD/YQD/XQD/Ygb/+fb/ZBH/49n/2c3/ybj/1Mb/rZD/oYD/k2r/fkf/mXT/p4j/8ez/mnX/8+//uaH/3dL/59//7Ob/zb3/w6//hlX/q47/s5n/eT//v6r/bij/iVv/ekH/jWH/dTf/f0r/ayH/kGb/o4L/TgD/g1CnAKOXAAAPFklEQVR4nO1daUOrOhAVCA1QbGtr99W6XKtX/f//7nVvwpyEAAHsfT0flUKGTOZMZgl3dzfckBWzxWQwGn09LFvNuodSDtq9kIV+EEWBHzK+Wc/qHpBtDL9YGDkCYt99XtQ9KptodnngEMSs0ap7ZNawCH0q4Q4e79U9NksYuR4WcYsg/ieW5aNiEk9T2al7gMXRACtRAr960/McpYi4FfLKLU9Pq6hHuPO6h1kES2YgohO/1j3OAhi7JiI6TvhU90jz4z19MR7Ar1Zb77mhiE70XvdY8+ItNpXxaidyaDyNW3/nq+7R5sPahDdOCOsebT401G4qBbtKl25oSBxHZR3UPd48WIRZZIz/1D3ePMi0HLfKWvd486Bv6gAc4A7rHnAO/Jiz434e7+secA5sMsp4jTusTNRxpeTx/D+Yx9X/YD2OMtrVcd0DzoFJNn68Soe1ZRTnOCFe1T3ePGhm2Fo5jr+ue7y58JHF6LjXaHLu7l4yOOWeU/do8yGLsl6pqt7dddPSABfwa00sj40n0r/KHfIeA1OKvMrN4xGemV/O2nUPtACmRtoaXG0EeY+JgbMTf9Y9yoIYpQrp+dcY5ZDQTxEyDq80DSBioF2TgXP1s7hD21U7ruyt7tFZwvCDYQ4J2LLusdnD4pPRufR591o9OIzFB/eF4EccMP/pGqMbegxf3n2XhVsw5m4G1xiGM8J4umgvF51/on7shhtuuOEGJZpb1D2GcjDuTL7enx3G3R04Dxqr/rpNea1pBOXV6NGpF1hBZ+S4zA+iWPCkvTjytw7K21J+7ObwErT47h4vXn4n/sM39OFr4SLOFSNsf3MJGSPQzYeQRcpQUxzykehmPhrE+8+lN20SOA9W5PlSuitQjDG57/YzFYcuWVq8MHCFKJqRjKdaOCqj45PmBxMZf0hqk2dIl3RNiqP4ZddXVEaHdRMjMJDxhYZPPPNS5kQYLQrZblmwRB+RUIlZWEaHJTId6TLOUfDEuJQ5kYVxe4vZuNkcz6fLnhSvCM4vX5YxChDOUwVlFLXCTEZcFMMNNzNyeluqtBiLZRpeBGWM+l2IkxBYRkfuYkmV8eFyFzEMHzfMZOxJKik/YPjtX/B9YhBJRpYSRVTI6PBpBhmFAm6vsRGEDB+MZJSLo0O5gWY9EYBlTFEXlYyOK/wwTUbnIpbbaokm0kxbE2V87K2dFvwsIKPwLDFUniLj6PLvXaH9mxgjMtLWZeJFx6EbvA2WU3VwKb+McVcQJnbO7pNexo5gFVkzUbNupK1NwI5xsCUQ/2ewhCwryegvOwhYRna3EtLMlznQytj0L5rKXnZ/eRAvN9LWF1Xcficpfx29JG8ic4cfUjBPJaNEAsGjiYxCU8ypcDnKbFvXXJMV9SLf9QaSmOk+gOCBJGVsik6//5Yuo9i+dfJDFqLbEhqVTnTiUJv79QL+I2htIRnv5tL4+mkyjoXLL164VAZk2Avz8un62pHH/OJjFpNRzjOzpxQZhYcJ9TySaxeD3RrEbP2HM1+9wXLCc7apoIx3bXGA7kQro+hMi32hX+IvzLR1j2Zr0vt0WaiQ9OxIJ2wOA1DbnB3WorrytkbGmfA6or442EAcY8bOreZ9e91r7CQls3WqGUpwRwtBK+PdSPzjdnqUMr4Kj/Jnw/kZw7VY62SsrRLmi/U7S2QQwxcgYyYf4FySI9LkluFeFDLKtT6SpsjlXHptvf8aXNCdSv/rNORd1MiajBJNenFX9CcvMppVwRzek05bO1zY9ZGWdmn7HPXsySjRpKPY+sTmXQbxs2YMM1GMKBmEkHTlFIeyIaNMkxLOMvbMywu32jrRDEJ6ViII8SSvhw6SMcv+USyRUyriScZFph48rbaOpLflR4PF/XBrQJvz1vpTEvFMenIcoPsA8dRJkVGmSSqjFGuMYUBFshY6bU1013rBIWblMubLy+Ec6kvEc3wId5Imo0yTREYx1hj/+QLhlK83aR0zjbaq3qeM+BKBMYnLOX66jDJNJmSUYo1csW2XHAHlVQchUztPYvbncgNrMso0KckoOaS+ah8sHymhbRkd97jOI499/iiG0fLL6Caf3AC32sso8aeX/Nnl99JE6rR1uyjXm51HniQkb79NfpzIJsuijE1AgTsZH6RfqbvrWrLt1Wnr/nGtyejDYztjs8fW7ISN98FySq7cuNQJJ+BHFlp+C3/8Jveac/rLLa+IP3JXmlH/SGNxzeKtzeF8NrufzeZDZR5wdm+C4ysdT4W/0fd1NyQ/3F40lfx7XWnWuCNd2vn3yrhuuOGGG264wSban40KEIAQwWz1d4eeDn1jjDB6uwe3mVc+/D4VcbvV8KPSsc9RK5O7NsGgM5jlwKvcT65KRlUQybg/Mj+qktFTNsaV/+y9jNmOZMoF9aYPVExZRkUy6o5wyHgATXZUJKMu2tnKFjjNjmpk1PeMv2U7nSUz9jJ2SpbR83Uils4flciY1v5XMn9UIWN6yvP6ZeQgNiXD7DzhvDjIWOojor9pIuLgsTVUIKPJKVWl8sdexmxHMmWE2ZEx2mOTk1uYjCM4zOP3IRCeAZdgdBj6IVOneL3YREQdf/huY7Pbf76+fm6xkzje5x993983xJ6j4srmkl1ZSXNX/XHEeI/mOFOfzPxLqWsMHJOPlFfFHx6bFOnUsdnpo1pQ8SO9tgnPWPOxCoa/qKlXcdQqKiftuyiBiPkj/E2nB6DaXscJRvTKe46TZpA/ftfJQRukayjAsYnxVmuKKqCBqtcIdH4lCnC0dzoJt8yAP0z8hwoBzsyFHVD7wgR4lhzgj/h3nVfiUF1Fs3XkCFi38ETsVoY+sQoA4l4RmIRzgQY0O5Q/ftVRXqCQFwU4zqsWvQDAH56i/bEOPFB6RAGOzsV2QrND+SNbe2qZAMcBwgDH52W2odkBlYFpBSiV4S81+yjAMREXLSwWpvwBlboGgNePAhwJX4gD3xzwh/s7jtkBbaUowJHoyYNfl/mt/NGm7nQEvpRHvq0DzU5ADPSpOL9W0GHBAAeZbZjoAfsPnNarFIA3kD0Bg4dmhyp+kKxrrxyIN1D5JdoEo+kG+w/ThvHSgHgDBDhgMAOaHcof8UfpUmiBeAMMCZ5agIkB8Ad6aRUC8QZQLcXnEaDZAfyhrj2uAMCSoABHRxW4g3UC1FDXerA34A1k6j+VgV9kdsCLq/GbEFStIGVP1FkjGM6gCwA5FdUAmAfkeuGg3WmGgNlB+4/U7FdJAGEmNOSeNpuB/FFKSPkaN4sDvG60FUr5CCQyO8CxqOkwWsQbYEub9gkoFxgpFFgoXyAKYP5QgCM1SwztCeCPOr4oQD1QGOBQZGsEIHsCNmw1fOkT8AZaMwZVG9DsUA2v/oM7KKwNbJ/CUZWBzA4waJpWq3IAeAMd8Wb2XT3kG1H+UFdPlgOwzUO2Q+mopv8U8Ie2ldo+QLoQcQBIg0AgswP4o9Kwh2HkYm1a3gTP9qH8EcCq9JIAeAMEvrWOauINAVce8Ud1H8EChID26shRjZjL0CFEipxzAtoTHKwC8QYIcABH1eOj1nC+bFAdRmoI+KOybB3iDRDgoNPgvR59FXAaAFJDwB8RvaoMgGocFAMFdunyJihvIg9iTJ9UUbYO8AZaTXTNCqEe4P8wYHYAf1SSrUO8AYb3pac3ZLbAi6IJahiUtQ06OORUp06UGfsB/qggWwcmAD0VLDiZ5w3ZDxmukiQ7A/AGCnAARzXpr/0xMjuAgErP1oF2DGQFqKNK/O6ZmdkBjkTJbivgDWTNgaNKBzaitb0hHT3gj5KzdbQ9CtXQgHGBfVETeDsgkYD4o8xsHWhzQ94V1S9oKMDdkNmh/FFqto6+eeQlozgFNPjUm0BmB1jgErN1gDfM7L2CuJHTDeJe9OPu5WXrAK+jKEWGvBMwmqDcHPBHadk6wBsowEEVWnkCI9hFI7MDXkVJ2TrAG2jw1FHVfN8ZkAwwmsBOl5StezUKcACF1gVGafoVWTHEH2Vk68CXudHggaO60twVOH3I7NDjvErJ1gHe+KFXLQDnaXd8YJGDtAniD/vZOrAfRFkW6qim7NyBk+8DX43yh/1sHVhmyG2kNiQ1AmPmqyH+sJ2tAxU2Zg50uksCfDVwkCHgD8vZOsQbYCMEEvnpriVYwsAJBq/PcrYO8AbwslFBhsG7/qC+GlhroG/NarYO8QbwskFh/xe9igDsltHvKH9YzdaBFhXgZYMGDTPb1zUyO4A/LGbrEG8A0gObf8PQPb0/6pmjESB7YQ/AG6hjis6GcQoGlVjT1wP4w1q2jvIGIj3wJsxjEiDECGIoiD/sZOuQSwl0kFpHtE1SwIziEX/YydZR3kA3RiyXYbH0aZAO0A7gDyvZOsAbSEHo4QQoWqoE+dohdh8Af1jorQMPRwudvuGMmx9Q5AqmCGiLhWxdlyoR0EGwUrJaA+BKAcsG+KNwtg5YS0S81FHNHIxAIXhqdoBxKpyto9t65EChIGJmdkYpeGp2+uCqgm7rK7klcoSpo5rDy0LMQM0ODeXFUdHUwJ+EMUEBDhrUz5UkRMxAd5/JbXj0WjwMuZKfjDZLZruSdFD+QWZHvsrXfRjAGH9FEdCmh5renGYAeFSAGeSPr1lq5h0JNwWherD9yxvFBqWgQG8E/mDm7mIKBuf3i3wX6qhm+FaYDMBUYP1f+IObfZ7UCOvjXVF9InU9NLH/NJhV4p2cW241xHr8LqQLAvDUUBQJs9CSFnAm1oE/vKK8mMT+IzTIlFCDX6inHwQ0gNnZ8UfMrBd6driHevqRo1rIfzRzSLezG5dQVDZl6JOu1FFVfvDGDMBKgzjqgjdKKWCZgSAbdVQNj5RTA5S0gAVujTPSQR3VwuUIYMNaa7MudVQtlJWAkpaC+l8EoIrIRp4FFMjWd8YMdVSt5MtQY+XKwn3zgJpAS4czoTqOqputjqCOqqWyfVDSUsA/LALqqGo/8pYFoKSlnjMCaKzTXj0iOFHgu/oez+1eJKmqFutKyW454IM6zkHoPDNZSlAgkBtySUvEu3Wd9NB6dAUprRbMiCUtEe/XeQTb9OcspeXCp3NJS8zfa1iJEu7fjl/+tN23dyhpid1V3ccg7TB730lpvf9yR02x+1jXQR1JzHo8sN+Q8BGxze84Qe+Aec9+P/Qsrsl/u+F34j8ctAWHXYOiBwAAAABJRU5ErkJggg==" alt="" width="100px"></h2>
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