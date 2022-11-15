<?php

require_once '../Models/Publications.php';
//require_once 'SesionsController.php';
// if(empty($_SESSION['nombreu'])){
// $sesioncontroller = new  SesionController();
// $sesioncontroller->RedireccionarUsuarios();
// }

class PublicationsController extends Publication{

public function ViewInsert(){

    require '../Views/Equipo/Insert.php';
}
public function ViewList(){
    
    $objetoretornadoequipo = $this->BuscarEquipos();
    require '../Views/Equipo/View.php';
}

public function GuardarInfoEquipo($nombree,$deportee,$fechae,$imagen,$imagen_url)
{
    $this->nombree = $nombree;
    $this->deportee = $deportee;
    $this->fecha_creacion = $fechae;
    $this->imagen = $imagen;
    $this->imagen_url = $imagen_url;
    $this->InsertarEquipo();
    $this->RedirigirLogin();
}
public function EliminarInfoEquipo($ide){
    $this->ide = $ide;
    // echo $this->ide;
    $this->EliminarEquipo();
    $this->RedirigirLogin();
}
public function ActualizarInfoEquipo($ide){
    $this->ide = $ide;
    // echo $this->ide;
    $objetoretornadoequipo = $this->MostrarEquipo();
    require '../Views/Equipo/Update.php';
}
public function GuardarInfoAtcualizarEquipo($ide,$nombree,$deportee,$fechae,$imagen,$imagen_url){
    $this->ide = $ide;
    $this->nombree = $nombree;
    $this->deportee = $deportee;
    // $this->contrasenae = $contrasenae;
    $this->fecha_creacion = $fechae;
    $this->imagen = $imagen;
    $this->imagen_url = $imagen_url;
    $this->ActualizarEquipo();
    $this->RedirigirLogin();
// echo $ide;
//     echo $nombree;
//     echo $deportee;
//     echo $contrasenae;
//     echo $imagen;
//     echo $imagen_url;
}
public function RedirigirLogin(){

    header("location: EquiposController.php?action=view");
}

}


if(isset($_GET['action']) && $_GET['action']=='insert'){
$instanciaequipos = new EquiposController();
$instanciaequipos->ViewInsert();
}
if(isset($_POST['action']) && $_POST['action']=='insert'){
$instanciaequipos = new EquiposController();
$imagen = $_FILES['imagen']['name'];
// echo $imagen;
$copiaimagen = $_FILES['imagen']['tmp_name'];
$imagen_url = "../Views/Equipo/Imagenes/" . $imagen;
copy($copiaimagen,$imagen_url);
$instanciaequipos->GuardarInfoEquipo($_POST['nombree'],$_POST['deportee'],$_POST['fechae'],$imagen,$imagen_url);
}
if(isset($_GET['action']) && $_GET['action']=='view'){
$instanciaequipos = new EquiposController();
$instanciaequipos->ViewList();
}
if(isset($_GET['action']) && $_GET['action']=='eliminar'){
$instanciaequipos = new EquiposController();
$eliminarequipo = "../Views/Equipo/Imagenes/" . $_GET['imagen'];
unlink($eliminarequipo);
$instanciaequipos->EliminarInfoEquipo($_GET['ide']);
}
if(isset($_GET['action']) && $_GET['action']=='actualizar'){
$instanciaequipos = new EquiposController();
$instanciaequipos->ActualizarInfoEquipo($_GET['ide']);
}

if(isset($_POST['action']) && $_POST['action']=='actualizar'){
$instanciaequipos = new EquiposController();
$imagenoriginal = $_POST['imagenoriginal'];
$original_url = $_POST['original_url'];
$imagen = $_FILES['imagen']['name'];
// echo $imagen;
$copiaimagen = $_FILES['imagen']['tmp_name'];
$imagen_url = "../Views/Equipo/Imagenes/" . $imagen;
if(empty($copiaimagen)){
    $imagen = $imagenoriginal;
    $imagen_url = $original_url;
}
else
{
    unlink($original_url);
    copy($copiaimagen,$imagen_url);
}
$instanciaequipos->GuardarInfoAtcualizarEquipo($_POST['ide'],$_POST['nombree'],$_POST['deportee'],$_POST['fechae'],$imagen,$imagen_url);
}

?>