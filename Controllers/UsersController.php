<?php

include_once '../Models/Users.php';
require 'SesionsController.php';

$sesioncontroller = new  SesionController();

class UserController extends User{

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
        include '../Index.php';
    }
    public function CargarLista()
    {
        include '../ListadoPersonas.php';
    }
    public function RedireccionarLista()
    {
        header("location: ../ListadoPersonas.php");
    }
    // public function RedireccionarActualizar()
    // {
    //     header("location: ../ActualizarRegistro.php");
    // }

        public function AlistarInformacion($nombreu,$emailu,$contrasena,$centrou,$foto,$foto_url)
        {
        $this->nombreu = $nombreu;
        $this->emailu = $emailu;
        $contrasenaincrip = password_hash($contrasena,PASSWORD_ARGON2ID);
        $this->contrasenau = $contrasenaincrip;
        $this->centrou = $centrou;
        $this->foto = $foto;
        $this->foto_url = $foto_url;
        $this->GuardarUsuario();
        $this->RedirectLogin();
        
        }

        public function VerificarLogin($emailu,$contrasenau)
        {
            $this->emailu = $emailu;
            $this->contrasenau = $contrasenau;
            $datosusuario = $this->ConsultarUsuarioEnBd();
            foreach($datosusuario as $u) {}
            if(password_verify($this->contrasenau,$u->contrasenau)){
                echo "La contraseña si coincide";
                $_SESSION['nombreu'] = $u->nombreu;
                header("location: UsersController.php?action=inicio");
            }else{
                echo "La contraseña es incorrecta";
            }
        }
        
    public function RedirectLogin()
    {
        header("location: UsersController.php?action=login");
    }

}


if(isset($_GET['action']) && $_GET['action']=='registrar'){
$usercontroller = new UserController();
$usercontroller->CargoVistaRegistrarse();
}
if(isset($_GET['action']) && $_GET['action']=='login'){
    $usercontroller = new UserController();
    $usercontroller->CargoVistaLogin();
}

if(isset($_GET['action']) && $_GET['action']=='inicio'){
    $usercontroller = new UserController();
    $usercontroller->CargoVistaInicio();
}
if(isset($_POST['action']) && $_POST['action']=="insertar"){
    $usercontroller = new UserController();
    $usercontroller->AlistarInformacion(
    $_POST['nombreu'],
    $_POST['emailu'],
    $_POST['contrasenau'],
    $_POST['centrou'],
    $_POST['foto'],
    $_POST['foto_url'],
); 
}
if(isset($_POST['action']) && $_POST['action'] == "login"){
    $usercontroller = new UserController();
    $usercontroller->VerificarLogin($_POST['emailu'],$_POST['contrasenau']);
}
if(isset($_GET['idu'])){
    $usercontroller = new UserController();
    $usercontroller->BorrarUsuario($_GET['idu']);
    $usercontroller->RedireccionarLista();
}
?>