<?php

require_once '../Models/Publications.php';
//require_once 'SesionsController.php';
// if(empty($_SESSION['nombreu'])){
// $sesioncontroller = new  SesionController();
// $sesioncontroller->RedireccionarUsuarios();
// }

class PublicationsController extends Publication{

public function ViewInsert(){

    require '../Views/Publicaciones/Insert.php';
}
public function ViewList(){
    
    $objetoretornadopublication = $this->BuscarPublicaciones();
    require '../Views/Publicaciones/Viewlist.php';
}
public function ViewListUser(){
    
    $objetoretornadopublication = $this->BuscarPublicaciones();
    require '../Views/Usuario/Publicaciones.php';
}

public function GuardarInfoPublicacion($nombre_p,$info_p,$fotos_p,$fotos_p_url,$precios_p)
{
    $this->nombre_p = $nombre_p;
    $this->info_p = $info_p;
    $this->fotos_p = $fotos_p;
    $this->fotos_p_url = $fotos_p_url;
    $this->precios_p = $precios_p;
    $this->InsertarPublicacion();
    $this->RedirigirViews();
}
public function EliminarinfoPublicaciones($id_p){
    $this->id_p = $id_p;
    $this->EliminarPublicaciones();
    // require '../Index.php';

}
public function ActualizarInfoPublicacion($id_p){
    $this->id_p = $id_p;
    // echo $this->id_p;
    $objetoretornadopublicacion = $this->ActualizarPublicacion();
    require '../Views/Publicaciones/Update.php';
}
// public function GuardarInfoAtcualizarPublicacion($ide,$nombree,$deportee,$fechae,$imagen,$imagen_url){
//     $this->ide = $ide;
//     $this->nombree = $nombree;
//     $this->deportee = $deportee;
//     // $this->contrasenae = $contrasenae;
//     $this->fecha_creacion = $fechae;
//     $this->imagen = $imagen;
//     $this->imagen_url = $imagen_url;
//     $this->ActualizarEquipo();
//     $this->RedirigirLogin();
// // echo $ide;
// //     echo $nombree;
// //     echo $deportee;
// //     echo $contrasenae;
// //     echo $imagen;
// //     echo $imagen_url;
// }

public function RedirigirViews(){

    header("location: PublicationsController.php?action=publicationuser");
}

}


if(isset($_GET['action']) && $_GET['action']=='insert'){
$instanciapublications = new PublicationsController();
$instanciapublications->ViewInsert();
}

if(isset($_GET['action']) && $_GET['action']=='publication'){
$instanciapublications = new PublicationsController();
$instanciapublications->ViewList();
}

if(isset($_GET['action']) && $_GET['action']=='publicationuser'){
$instanciapublications = new PublicationsController();
$instanciapublications->ViewListUser();
}
if(isset($_POST['action']) && $_POST['action']=='insert'){
$instanciapublications = new PublicationsController();
$fotos_p = $_FILES['fotos_p']['name'];
// echo $imagen;
$copiafotos_p = $_FILES['fotos_p']['tmp_name'];
$fotos_p_url = "../Views/Publicaciones/Imagenes/" . $fotos_p;
copy($copiafotos_p,$fotos_p_url);
$instanciapublications->GuardarInfoPublicacion($_POST['nombre_p'],$_POST['info_p'],$fotos_p,$fotos_p_url,$_POST['precios_p']);

}
   
if (isset($_GET['action']) && $_GET['action'] == 'eliminar') {
    $instanciapublications = new PublicationsController();
    $instanciapublications->EliminarinfoPublicaciones($_GET['id_p']);
    $instanciapublications->ViewListUser();
}
if(isset($_GET['action']) && $_GET['action']=='actualizar'){
    $instanciaequipos = new PublicationsController();
    $instanciaequipos->ActualizarInfoPublicacion($_GET['id_p']);
    }
// if(isset($_GET['action']) && $_GET['action']=='view'){
// $instanciapublications = new PublicationsController();
// $instanciapublications->ViewList();
// }



// if(isset($_POST['action']) && $_POST['action']=='actualizar'){
// $instanciaequipos = new EquiposController();
// $imagenoriginal = $_POST['imagenoriginal'];
// $original_url = $_POST['original_url'];
// $imagen = $_FILES['imagen']['name'];
// // echo $imagen;
// $copiaimagen = $_FILES['imagen']['tmp_name'];
// $imagen_url = "../Views/Equipo/Imagenes/" . $imagen;
// if(empty($copiaimagen)){
//     $imagen = $imagenoriginal;
//     $imagen_url = $original_url;
// }
// else
// {
//     unlink($original_url);
//     copy($copiaimagen,$imagen_url);
// }
// $instanciaequipos->GuardarInfoAtcualizarEquipo($_POST['ide'],$_POST['nombree'],$_POST['deportee'],$_POST['fechae'],$imagen,$imagen_url);
// }


// if(isset($_GET['action']) && $_GET['action']=='eliminar'){
//     $instanciapublications = new PublicationsController();
//     $eliminar = "../Views/Publicaciones/Imagenes/" . $_GET['fotos_'];
//     // unlink($eliminar);
//     $instanciapublications->EliminarInfoPublicacion($_GET['id_p']);
//     } 

// ?>