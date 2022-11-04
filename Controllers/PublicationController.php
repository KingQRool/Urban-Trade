<?php
session_start();

include_once '../Models/Publications.php';
class PublicationsController extends Publicaction{

    public function RedirectPublicaciones()
    {
        header("location:../Views\Publicaciones.php");
    }


    public function AlistarPublicacion($nombre_p,$info_p,$fotos_p,$foto_p_url,$precios_p)
    {
        $this->nombre_p = $nombre_p;
        $this->info_p = $info_p;
        $this->fotos_p = $fotos_p;
        $this->foto_p_url = $foto_p_url;
   
        $this->precios_p = $precios_p;

        $this->GuardarPublicacion();
        $this->RedirectPublicaciones();
        
        // return $instanciajugador;
         
    }
}

if(isset($_POST['action']) && $_POST['action']=='insertarP'){
    $publicationcontroller = new PublicationsController();
    // if ($_FILES){
        // $fotos_p = $_FILES['fotos_p']['publicacion'];
        // $fototemporal = $_FILES['fotos_p_url']['tmp_publicacion'];
        // $foto_p_url = "../Views/Images/$fotos_p";
        $foto_p_url = "algo random";
    // }
    $publicationcontroller->AlistarPublicacion(
    $_POST['nombre_p'],
    $_POST['info_p'],
    $_POST['fotos_p'],
    $foto_p_url,
    $_POST['precios_p']);}
    

else{
    echo "No se ha enviado nada";
}
?>