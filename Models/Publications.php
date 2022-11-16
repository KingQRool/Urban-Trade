<?php
require_once '../Config/Conexion.php';

class Publication{
    protected $id_p;
    protected $nombre_p;
    protected $info_p;
    protected $fotos_p;
    protected $fotos_p_url;
    protected $precios_p;


        // INSERTAR PUBLICACION A BD //

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

    
        //Codigo Mostrar Todas Las Publicaciones↓

    protected function BuscarPublicaciones(){
        $conexion = new Conexion();
        $sql = "SELECT * FROM tbl_publicaciones";
        $mostrar = $conexion->stm->prepare($sql);
        $mostrar->execute();
        $objetoretornadopublication = $mostrar->fetchAll(PDO::FETCH_OBJ);
        return $objetoretornadopublication;
    }


        //Codigo Para Eliminar Publicaciones↓

//     protected function EliminarEquipo(){
//         $conexion = new Conexion();
//         $sql = "DELETE FROM tbl_equipo WHERE ide='$this->ide'";
//         $eliminar = $conexion->stm->prepare($sql);
//         $eliminar->execute();
//     }

        //Codigo Mostrar Datos Formulario Actualizar↓

    protected function MostrarPublicacion(){
        $conexion = new Conexion();
        $sql = "SELECT * FROM tbl_publicaciones WHERE id_p='$this->id_p'";
        $mostrar = $conexion->stm->prepare($sql);
        $mostrar->execute();
        $objetoretornadopublication = $mostrar->fetchAll(PDO::FETCH_OBJ);
        return $objetoretornadopublication;
    }

        //Codigo Para Actualizar Datos↓

//     protected function ActualizarPublicacion(){
//         $conexion = new Conexion();
//         $sql = "UPDATE tbl_equipo SET nombree='$this->nombree',deportee='$this->deportee',fecha_creacion='$this->fechae',imagen='$this->imagen',imagen_url='$this->imagen_url' WHERE ide='$this->ide'";
//         $actualizar = $conexion->stm->prepare($sql);
//         $actualizar->execute();
//     }
    
 }


?>