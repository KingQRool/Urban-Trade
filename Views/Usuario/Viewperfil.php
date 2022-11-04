<script src="../Public/Js/jquery-3.1.1.min.js"></script>
<link rel="stylesheet" href="../Public/Css/semantic.css">

<div class="ui vertical menu">
        <div class="item">
            <img src="../Public/Img/logourbantrade_black.png  " alt="Logo Sena">
        </div>
        <div class="item">
            <a href="http://localhost/Urban-Trade/Controllers/UsersController.php?action=inicio">Inicio</a>
        </div>
        <div class="item">
        <a href="http://localhost/Urban-Trade/Controllers/UsersController.php?action=cerrar">Cerrar Sesion</a>
    </div>
</div>
<div class="ui container">
    <h1> Mi Perfil</h1> 
    <?php foreach ($objetoretornadousuario as $usuario) { ?>

        <div class="ui card">
            <div class="image">
                <img src="<?php echo $usuario->imagen_url; ?>">
            </div>
            <div class="content">
            <?php echo $_SESSION['nombre_u'];?>
            </div>
            <div class="extra content">
                <span>
                    <i class="edit icon"></i>
                    <button onclick="actualizar(<?php echo $usuario->id_u; ?>)">Actualizar Datos</button>
                </span>
                <span class="right floated">
                    <i class="trash icon"></i>
                    <button onclick="borrar(<?php echo $usuario->id_u; ?>)">Eliminar</button>
                </span>
            </div>

        </div>
        <br>
    <?php } ?>
</div>
<script src="../Public/Js/sweetalert.min.js"></script>
    <script>
        function borrar(id_u){
            swal({
        title: "¿esta seguro que desea eliminar?",
        text: "si borra el registro no se podra recuperar",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            swal("el registro se borro con exito", {
            icon: "success",
            });
            location.href = 'JugadoresController.php?action=eliminar'
        } else {
            swal("se cancelo la eliminacion");
        }
        });
        }
    </script>
    <script>
        function actualizar(idj){
            
            location.href = "JugadoresController.php?action=actualizar&idj=" + id_u;
        }
    </script>

