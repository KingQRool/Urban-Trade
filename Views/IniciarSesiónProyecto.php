<?php
require '../Inc/Header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>INICIAR SESION TRADE URBAN</title>
  <link rel="stylesheet" href="../Public\css\IniciarSesiónProyecto.css">
</head>
<body>
  <div>
    <div class="Iniciosesion">
      <form action="../Controllers/UsersController.php" class="form" method="POST">
      <h2 class="section-heading text-uppercase" style="text-align: center;">Inicio De Sesión</h2>
      <br>
    <div class="contenedor">
      <input type="hidden" name="action" value="login">
      <input type="email" class="input" placeholder="Usuario" name="emailu" id="emailu" required>
      <label for="" class="label">Email</label>
    </div>

    <div class="contenedor">
      <input type="password" class="input" placeholder="Contraseña" name="contrasenau" id="contrasenau" required>
      <label for="" class="label">Contraseña</label>
    </div>
    <div>
      <input type="submit" class="submitBtn" value="INGRESAR">
    </div>
      </form>
    </div>
  </div>
</body>
</html>

<?php
require '../Inc/Footer.php';
?>