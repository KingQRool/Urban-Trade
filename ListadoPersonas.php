<?php 

include 'Config\Conexion.php';
$conexion = new Conexion();
// $conexion->BdConnect();
$sql = "SELECT * FROM usuariosr";
$consulta = $conexion->stm->prepare($sql);
$consulta->execute();
$personas = $consulta->fetchAll(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1> EJEMPLO DE  UN LISTADO</h1>
        <table class="table table-striped table hover">
          <tr>
            <th>
                Nombre
            </th>
            <th>
                Email
            </th>
            <th>
                Contraseña
            </th>
            <th>
                Centro 
            </th>
            <th>
                Acciones
            </th>
          </tr>
<?php foreach($personas as $p) { ?>
          <tr>
            <td>
                <?php echo $p->nombreu; ?>
            </td>
            
            <td>
            <?php echo $p->emailu; ?>
            </td>

            <td>
            <?php echo $p->contrasenau; ?>
            </td>

            <td>
            <?php echo $p->centrou; ?>
            </td>
            <td>
            
            <a href="ActualizarRegistro.php?idu=<?php echo $p->idu; ?>"><button>ACTUALIZAR</button></a>    <a href="Controllers/UsersController.php?idu=<?php echo $p->idu;?>"><button>ELIMINAR</button> </a>
            </td>
        </tr>
<?php } ?>      
        </table>

    </div>

    
</body>
</html>