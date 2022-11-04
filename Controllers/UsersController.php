<?php

include_once '../Models/Users.php';
require 'SesionsController.php';

$sesioncontroller = new  SesionController();

class UserController extends User
{

    public function CargoVistaRegistrarse()
    {
        include '../Views/Usuario/Register.php';
    }
    public function CargoVistaLogin()
    {
        include '../Views/Usuario/Login.php';
    }
    public function CargoVistaInicio()
    {
        include '../Views/Usuario/IndexUser.php';
    }
    public function CargarLista()
    {
        include '../ListadoPersonas.php';
    }
    public function CargoVistaPerfil()
    {
        $objetoretornadousuario = $this->BuscarUsuarioVista();
        include '../Views/Usuario/Viewperfil.php';
    }
    public function RedireccionarLista()
    {
        header("location: ../ListadoPersonas.php");
    }

    public function AlistarInformacion($correo_u,$nombre_u,$password,$centro_u)
    {
        $this->correo_u = $correo_u;
        $this->nombre_u = $nombre_u;
        $password = password_hash($_POST['contrasena_u'], PASSWORD_BCRYPT);
        $this->contrasena_u = $password;
        $this->centro_u = $centro_u;
        $this->GuardarUsuario();
        $this->RedirectLogin();
    }

    public function VerificarLogin($correo_u,$contrasena_u)
    {
        $this->correo_u = $correo_u;
        $this->contrasena_u = $contrasena_u;
        $usuarioobjeto = $this->BuscarUsuario();
        // echo $correo_u;
        // echo $contrasena_u;
        foreach($usuarioobjeto as $usuario){};
        if(password_verify($contrasena_u,$usuario->contrasena_u)){
            // echo "La contraseña si coincide";
            $_SESSION['id_u'] = $usuario->id_u;
            $_SESSION['nombre_u'] = $usuario->nombre_u;
            $this->CargoVistaInicio();
        }else{
            echo 'contraseña incorrecta';
        }
    }

    public function ActualizarUsuario($id_u){
        $this->id_u = $id_u;
        // echo $this->idj;
        $objetoretornadousuario = $this->MostrarUsuario();
        CargoVistaPerfil();

    }

    public function RedirectLogin()
    {
        header("location: UsersController.php?action=login");
    }
}


if (isset($_GET['action']) && $_GET['action'] == 'register') {
    $usercontroller = new UserController();
    $usercontroller->CargoVistaRegistrarse();
}
if (isset($_GET['action']) && $_GET['action'] == 'actualizar') {
    $usercontroller = new UserController();
    $usercontroller->ActualizarUsuario($_GET['id_u']);
}

if (isset($_GET['action']) && $_GET['action'] == 'login') {
    $usercontroller = new UserController();
    $usercontroller->CargoVistaLogin();
}

if (isset($_GET['action']) && $_GET['action'] == 'inicio') {
    $usercontroller = new UserController();
    $usercontroller->CargoVistaInicio();
}
if (isset($_GET['action']) && $_GET['action'] == 'Viewperfil') {
    $usercontroller = new UserController();
    $usercontroller->CargoVistaPerfil();
}

if (isset($_POST['action']) && $_POST['action'] == "insertar") {
    $usercontroller = new UserController();
    $usercontroller->AlistarInformacion(
        $_POST['correo_u'],
        $_POST['nombre_u'],
        $_POST['contrasena_u'],
        $_POST['centro_u'],
    );
}
if (isset($_POST['action']) && $_POST['action'] == "login") {
    $usercontroller = new UserController();
    $usercontroller->VerificarLogin($_POST['correo_u'], $_POST['contrasena_u']);
}
