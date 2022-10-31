<?php
require_once '../Inc/Header.php';
foreach($objetoretornadousuario as $usuario){

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>
         ACTUALIZAR 
        </h1>
        <div class="field">
            <label for="nombre">Nombre Del Club</label>
            <input type="hidden" name="action" value="actualizar">
            <input type="hidden" name ="ide" value ="<?php echo $usuario->idu; ?>">
            <input type="text" name="nombree" placeholder="Nombre" value="<?php echo $usuario->nombreu; ?>">
        </div>
    </div>
    <h1>
        ELIMINAR
    </h1>
</body>
</html>