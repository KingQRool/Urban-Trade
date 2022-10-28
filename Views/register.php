<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/register.css">
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

  <form action="https://httpbin.org/post" method="POST" class="form login">
    <div class="form__field">
      <label for="login__username"><svg class="icon">
          <use xlink:href="#icon-user"></use>
        </svg><span class="hidden">Nombre</span></label>
      <input id="login__username" type="text" name="nombreu" class="form__input" placeholder="Username" required>
    </div>
    
    <div class="form__field">
      <label for="login__password"><svg class="icon">
          <use xlink:href="#icon-email"></use>
        </svg><span class="hidden">Correo</span></label>
      <input id="login__email" type="password" name="emailu" class="form__input" placeholder="Correo" required>
    </div>

    <div class="form__field">
      <label for="login__password"><svg class="icon">
          <use xlink:href="#icon-lock"></use>
        </svg><span class="hidden">Password</span></label>
      <input id="login__password" type="password" name="contrasenau" class="form__input" placeholder="Contraseña" required>
    </div>

    <div class="form__field">
      <label for="login__password"><svg class="icon">
          <use xlink:href="#icon-center"></use>
        </svg><span class="hidden">Centro Educativo</span></label>
      <input id="login_centro" type="text" name="centrou" class="form__input" placeholder="Centro Sena" required>
    </div>


    <div class="form__field">
      <input type="submit" value="Registrarse">
    </div>

  </form>

  <p class="text--center">Ya tienes cuenta? <a href="login.php">Inicia Sesion</a> <svg class="icon">
      <use xlink:href="#icon-arrow-right"></use>
    </svg></p>

</div>

<svg xmlns="http://www.w3.org/2000/svg" class="icons">
  <symbol id="icon-arrow-right" viewBox="0 0 1792 1792">
    <path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z" />
  </symbol>
  <symbol id="icon-lock" viewBox="0 0 1792 1792">
    <path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z" />
  </symbol>
  <symbol id="icon-user">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  </symbol>

  <symbol id="icon-email">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
  </symbol>
  
  <symbol id="icon-center">
  <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
  <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
  </symbol>
  <symbol id="icon-home">
    <path>
    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/
    </path>
  </symbol>
</svg>

</body>
</body>
</html>