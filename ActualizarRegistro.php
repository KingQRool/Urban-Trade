
<?php 
$idu = $_GET['idu'];
include 'Config\Conexion.php';
$conexion = new Conexion();

$sql = "SELECT * FROM usuariosr WHERE idu=$idu";
$consulta = $conexion->stm->prepare($sql);

$persona = $consulta->fetchAll(PDO::FETCH_OBJ);
// var_dump($persona);
foreach($persona as $p){}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>REGISTRATE TRADE URBAN</title>
  <link rel="stylesheet" href="Public/css/RegistroProyecto.css">
</head>
  
    <div class="container">
      
        <form action="Controllers/UsersController.php" class="form"method="POST" enctype="multipart/form-data"> 
          <h1 class="title" style="text-align: center;">ACTUALIZAR</h1>
    
          <div class="contenedor">
            
            <input type="email" class="input" name="emailu" id="emailu" placeholder="Ingrese Un Correo Eletronico" value="<?php echo $p->emailu; ?>" required>
            <label for="" class="label">Ingrese Un Correo Electronico</label>
          </div>
    
          <div class="contenedor">
          <input type="hidden" name="idu" value="<?php echo $p->idu; ?>">
            <input type="text" class="input" placeholder="Ingrese Un Nombre De Usuario" required minlength="4" maxlength="40" name="nombreu" id="nombreu" value="<?php echo $p->nombreu; ?>"> 
            <label for="" class="label">Ingrese Su Nombre De Usuario</label>
          </div>
    
          <div class="contenedor">
            <input type="password" class="input" placeholder="Contraseña" required minlength="4" maxlength="25" name="contrasenau" id="contrasenau" value="<?php echo $p->contrasenau; ?>">
            <label for="" class="label">Contraseña</label>
          </div>

          <div class="contenedor">
            <input type="text" class="input" placeholder="Ingrese El Centro Al Que Centro pertenece" name="centrou" id="centrou" value="<?php echo $p->centrou; ?>">
            <label for="" class="label">Ingrese El Centro Al Que Centro pertenece</label>
          </div>


    
          <input type="submit" class="submitBtn" value="actualizar" name="action">
          
        
        </form>
      </div>

  
        
</body>
</html>
<?php
require 'Inc/Footer.php';
?>
