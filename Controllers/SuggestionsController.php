<?php
include_once '../Models/Suggestion.php';
require 'SesionsController.php';
$isc = new SesionController();

class SuggestionsController extends Suggestion{

    public function CargoVistaInicio()
    {
        include '../Views/Usuario/IndexUser.php';
    }


    public function GuardarInformacion($mensaje_s)
    {
        $this->nombre_s = $_SESSION['nombre_u'];
        $this->mensaje_s = $mensaje_s;
        $this->id_u = $_SESSION['id_u'];
        $this->GuardarSugerencia();
        echo '<script language="javascript">alert("Sugerencia Enviada Con Exito")</script>';
        $this->CargoVistaInicio();
        
    }

}

if (isset($_POST['action']) && $_POST['action'] == "insertar") {
    $seggestioncontroller = new SuggestionsController();
    $seggestioncontroller->GuardarInformacion(
        $_POST['mensaje_s'],
    );
}

?>