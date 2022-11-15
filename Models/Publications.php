<?php
require_once '../Config/Conexion.php';

class Equipo{
    protected $id_p;
    protected $nombre_p;
    protected $info_p;
    protected $fotos_p;
    protected $fotos_p_url;
    protected $precios_p;


    protected function InsertarPublicacion(){
        $conexion = new Conexion();
        $sql = "INSERT INTO tbl_publicaciones(nombre_p,info_p,fotos_p,fotos_p_url,precios_p) VALUES (?,?,?,?,?)";
        $insertar = $conexion->stm->prepare($sql);
        $insertar->bindParam(1,$this->nombre_p);
        $insertar->bindParam(2,$this->info_p);
        $insertar->bindParam(3,$this->fotos_p);
        $insertar->bindParam(4,$this->fotos_p_url);
        $insertar->bindParam(5,$this->precios_p);
        $insertar->execute();
    }

//     protected function BuscarEquipos(){
//         $conexion = new Conexion();
//         $sql = "SELECT * FROM tbl_equipo";
//         $mostrar = $conexion->stm->prepare($sql);
//         $mostrar->execute();
//         $objetoretornadoequipo = $mostrar->fetchAll(PDO::FETCH_OBJ);
//         return $objetoretornadoequipo;
//     }
//     protected function EliminarEquipo(){
//         $conexion = new Conexion();
//         $sql = "DELETE FROM tbl_equipo WHERE ide='$this->ide'";
//         $eliminar = $conexion->stm->prepare($sql);
//         $eliminar->execute();
//     }
//     protected function MostrarEquipo(){
//         $conexion = new Conexion();
//         $sql = "SELECT * FROM tbl_equipo WHERE ide='$this->ide'";
//         $mostrar = $conexion->stm->prepare($sql);
//         $mostrar->execute();
//         $objetoretornadoequipo = $mostrar->fetchAll(PDO::FETCH_OBJ);
//         return $objetoretornadoequipo;
//     }
//     protected function ActualizarEquipo(){
//         $conexion = new Conexion();
//         $sql = "UPDATE tbl_equipo SET nombree='$this->nombree',deportee='$this->deportee',fecha_creacion='$this->fechae',imagen='$this->imagen',imagen_url='$this->imagen_url' WHERE ide='$this->ide'";
//         $actualizar = $conexion->stm->prepare($sql);
//         $actualizar->execute();
//     }
    
 }


?>