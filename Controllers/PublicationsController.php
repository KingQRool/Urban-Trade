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
    $objetoretornadopublication = $this->MostrarPublicacion();
    require '../Views/Publicaciones/Update.php';
}
public function GuardarInfoAtcualizarPublicacion($id_p,$nombre_p,$info_p,$fotos_p,$fotos_p_url,$precios_p){
    $this->id_p= $id_p;
    $this->nombre_p = $nombre_p;
    $this->info_p = $info_p;
    // $this->contrasenae = $contrasenae;
    $this->fotos_p = $fotos_p;    
    $this->fotos_p_url = $fotos_p_url;
    $this->precios_p = $precios_p;
    $this->ActualizarPublicacion();
    $this->ViewListUser();
// echo $id_p;
//     echo $nombree;
//     echo $deportee;
//     echo $contrasenae;
//     echo $imagen;
//     echo $imagen_url;
}

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
    $instanciapublications = new PublicationsController();
    $instanciapublications->ActualizarInfoPublicacion($_GET['id_p']);
    }

if(isset($_POST['action']) && $_POST['action']=='actualizar'){
$instanciapublications = new PublicationsController();
$fotooriginal = $_POST['fotooriginal'];
$original_url = $_POST['original_url'];
$fotos_p = $_FILES['fotos_p']['name'];
// echo $imagen;
$copiafoto = $_FILES['fotos_p']['tmp_name'];
$fotos_p_url = "../Views/Publicaciones/Imagenes/" . $fotos_p;

if(empty($copiafoto)){
    echo "hola";
    $fotos_p = $fotooriginal;
    $fotos_p_url = $original_url;
}
else
{
    echo "adios";
    unlink($original_url);
    copy($copiafoto,$fotos_p_url);
}
$instanciapublications->GuardarInfoAtcualizarPublicacion($_POST['id_p'],$_POST['nombre_p'],$_POST['info_p'],$fotos_p,$fotos_p_url,$_POST['precios_p']);
}
// if(isset($_GET['action']) && $_GET['action']=='view'){
// $instanciapublications = new PublicationsController();
// $instanciapublications->ViewList();
// }


// if(isset($_GET['action']) && $_GET['action']=='eliminar'){
//     $instanciapublications = new PublicationsController();
//     $eliminar = "../Views/Publicaciones/Imagenes/" . $_GET['fotos_p'];
//     // unlink($eliminar);
//     $instanciapublications->EliminarinfoPublicaciones($_GET['id_p']);
//     } 

?>