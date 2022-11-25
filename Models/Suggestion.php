<?php
include_once '../Config/Conexion.php';

class Suggestion{
    protected $id_s;
    protected $nombre_s;
    protected $mensaje_s;
    protected $id_u;

    protected function GuardarSugerencia()
    {
        $conexion = new Conexion();
        $sql = "INSERT INTO tbl_sugerencias(nombre_s,mensaje_s,id_u) VALUES (?,?,?)";
        $insertar = $conexion->stm->prepare($sql);
        $insertar->bindParam(1,$this->nombre_s);
        $insertar->bindParam(2,$this->mensaje_s);
        $insertar->bindParam(3,$this->id_u);
        $insertar->execute();
    }


}
?>