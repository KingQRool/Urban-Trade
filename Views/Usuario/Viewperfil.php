<?php 

if(empty($_SESSION['nombre_u'])){
    //echo 'logueese';
    $isc = new SesionController();
    $isc->RedireccionarUsuarios();
}
?>
<head>
    <script src="../Public/Js/jquery-3.1.1.min.js"></script>
    <script scr="../Public/Js/semantic.js"></script>
    <link rel="stylesheet" href="../Public/Css/semantic.css">
    <link rel="icon" type="image/x-icon" href="../Public/img/logo.ico" />
    <script src="https://kit.fontawesome.com/357827b059.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Public/Css/perfilusuario.css">
</head>

<body>

    <div>
        <div class="ui vertical menu">
            <div class="item">
                <img src="../Public/Img/logourbantrade_black.png  " alt="Logo UrbanTrade">
            </div>
            <div class="item">
                <a
                    href="http://localhost/Proyecto Git/Urban-Trade/Controllers/UsersController.php?action=inicio">Inicio</a>
            </div>
            <div class="item">
                <a
                    href="http://localhost/Proyecto Git/Urban-Trade/Controllers/PublicationsController.php?action=mispublicaciones">Mis
                    Publicaciones</a>
            </div>
            <div class="item">
                <a href="http://localhost/Proyecto Git/Urban-Trade/Controllers/UsersController.php?action=cerrar">Cerrar Sesion</a>
            </div>


        </div>

        <div class="ui centered card top-20000">
            <div class="image">
                <img src="../Public/Img/Perfil.jpg">
            </div>
            <div class="content">
                <p id="nombre_usaurio" class="ui centered header"><?php echo $_SESSION['nombre_u'];?></p>
            </div>
            <div class="content">
                <p class="ui centered header"><?php echo $_SESSION['correo_u'];?></p>
            </div>

            <div>
                <!-- <i class="fa-solid fa-trash"></i> -->
                <button class="ui inverted orange button" onclick="borrar(<?php echo $_SESSION['id_u'];?>)">Eliminar
                    Perfil</button>
                <!--<i class="fa-regular fa-pen-to-square"></i> -->
                <button class="ui inverted green button"
                    onclick="actualizar(<?php echo $_SESSION['id_u'];?>)">Actualizar Datos</button>

            </div>

        </div>
    </div>

    <script src="../Public/Js/sweetalert.min.js"></script>
    <script>
    function borrar(id_u) {
        swal({
                title: "¿esta seguro que desea eliminar?",
                text: "si borra esta cuenta no se podra recuperar",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("el registro se borro con exito", {
                        icon: "success",
                    });
                    location.href = "UsersController.php?action=eliminar&id_u=" + id_u;
                } else {
                    swal("se cancelo la eliminacion");
                }
            });
    }
    </script>
    <script>
    function actualizar(id_u) {

        location.href = "UsersController.php?action=actualizar&id_u=" + id_u;
    }
    </script>

</body>