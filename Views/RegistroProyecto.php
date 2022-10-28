<?php
require '../Inc/Header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>REGISTRATE TRADE URBAN</title>
  <link rel="stylesheet" href="../Public/css/RegistroProyecto.css">
</head>

    <div class="Registro">
      <form action="../Controllers/UsersController.php" class="form" method="POST"> 
          <h2 class="masthead-heading text-uppercase" style="text-align: center;">Registrarse</h2>

          <div class="contenedor">
            <input type="hidden" name="action" value="insertar">
            <input type="email" class="input" name="emailu" id="emailu" placeholder="Ingrese Un Correo Eletronico" required>  
            <label for="" class="label">Ingrese Un Correo Electronico</label>
          </div>

          <div class="contenedor">
            <input type="text" class="input" placeholder="Ingrese Un Nombre De Usuario" required minlength="4" maxlength="40" name="nombreu" id="nombreu"> 
            <label for="" class="label">Ingrese Su Nombre De Usuario</label>
          </div>
    
          <div class="contenedor">
            <input type="password" class="input" placeholder="Contraseña" required minlength="4" maxlength="25" name="contrasenau" id="contrasenau">
            <label for="" class="label">Contraseña</label>
          </div>

          <div class="contenedor">
            <input type="text" class="input" placeholder="Ingrese El Centro Al Que Centro pertenece" name="centrou" id="centrou">
            <label for="" class="label">Ingrese El Centro Educativo</label>
          </div>

          <div class="contenedor">
                <input type="file" class="input" placeholder="Ingrese Foto" name="fotoj" id="fotoj"
                    accept=".jpg, .png, .gif, .pdf" >
                <label for="" class="label">foto De Perfil</label>
            </div>


          <div>
          <input type="submit" class="submitBtn" value="REGISTRARSE">
          </div>
      </form>
        </div>
    </div>
</body>
</html>

<?php
require '../Inc/Footer.php';
?>
