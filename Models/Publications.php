<?php
class Publicaction{
    protected $id_p;
    protected $nombre_p; // 1
    protected $info_p; // 2
    protected $fotos_p; // 3
    protected $foto_p_url; // 4
    protected $resenas_p; // 5
    protected $precios_p; // 6


    protected function GuardarPublicacion()
    {
        include_once '..Config/Conexion.php';
        $conexion = new Conexion();
        $sql = 'INSERT INTO tbl_publicaciones (nombre_p,info_p,fotos_p,foto_p_url,resenas_p,precios_p) VALUES (?,?,?,?,?,?)';
        $insertar = $conexion->stm->prepare($sql);
        $insertar->bindParam(1,$this->nombre_p);
        $insertar->bindParam(2,$this->info_p);
        $insertar->bindParam(3,$this->fotos_p);
        $insertar->bindParam(4,$this->foto_p_url);
        $insertar->bindParam(5,$this->resenas_p);
        $insertar->bindParam(6,$this->precios_p);
        $insertar->execute();

        echo "Se guardo el producto con exito";
    }
//     public function BorrarPublicacion($borrar) {
//         include '../Config/Conexion.php';
//         $conexion = new Conexion();
//         $sql = "DELETE FROM tbl_publicaciones WHERE id_p='$borrar'";
//         $publicacion = $conexion->stm->prepare($sql);
//         $publicacion->execute();
}

?>