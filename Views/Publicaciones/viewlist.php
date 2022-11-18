<?php

require_once '../Inc/Header.php';

?>

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
            
            </div>

        </div>
        <br>
    <?php } ?>

<?php

require_once '../Inc/Footer.php';

?>