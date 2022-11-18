<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Public/Css/semantic.css">
</head>
<body>
<div class="ui container">
    <h1> Listado Publicaciones</h1>
    <?php foreach ($objetoretornadopublication as $publication) { ?>
        <div class="ui card">
            <div class="image">
                <img src="<?php echo $publication->fotos_p_url; ?>">
            </div>
            <div class="content">
                <a class="header"><?php echo $publication->precios_p;?></a>
                <div class="meta">
                    <span class=""><?php echo $publication->nombre_p;?></span>
                </div>
                <div class="description">
                    <?php echo $publication->info_p; ?>
                </div>
            </div>
            <div class="extra content">
                <span>
                    <i class="edit icon"></i>
                    <button onclick="actualizar(<?php echo $publication->id_p; ?>)">Actualizar</button>
                </span>
                <span class="right floated">
                    <i class="trash icon"></i>
                    <button onclick="borrar(<?php echo $publication->id_p; ?>,'<?php echo $publication->fotos_p ?>')">Eliminar</button>
                </span>
            </div>

        </div>
        <br>
    <?php } ?>
</body>
</html>
