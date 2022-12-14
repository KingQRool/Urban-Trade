<?php
include_once '../Config/Conexion.php';
class User{
    protected $id_u;
    protected $nombre_u; //1//
    protected $correo_u; //2//
    protected $contrasena_u; //3//
    protected $centro_u; //4//



//este modelo es el unico que va a conectar a base de datos

    protected function GuardarUsuario()
    {
        $conexion = new Conexion();
        $sql = "INSERT INTO tbl_usuarios_registrados(correo_u,nombre_u,contrasena_u,centro_u) VALUES (?,?,?,?)";
        $insertar = $conexion->stm->prepare($sql);
        $insertar->bindParam(1,$this->correo_u);
        $insertar->bindParam(2,$this->nombre_u);
        $insertar->bindParam(3,$this->contrasena_u);
        $insertar->bindParam(4,$this->centro_u);
        $insertar->execute();

    }
    public function BuscarUsuario()
    {
        $conexion = new Conexion();
        $sql = "SELECT * FROM tbl_usuarios_registrados WHERE correo_u='$this->correo_u'";
        $usuario = $conexion->stm->prepare($sql);
        $usuario->execute();
        $usuarioobjeto = $usuario->fetchAll(PDO :: FETCH_OBJ);
        return $usuarioobjeto;
    }
    public function BuscarUsuarioVista()
    {
        $conexion = new Conexion();
        $sql = "SELECT * FROM tbl_usuarios_registrados";
        $usuario = $conexion->stm->prepare($sql);
        $usuario->execute();
        $usuarioobjeto = $usuario->fetchAll(PDO :: FETCH_OBJ);
        return $usuarioobjeto;
    }

    protected function MostrarUsuario(){
        $conexion = new Conexion();
        $sql = "SELECT * FROM tbl_usuarios_registrados WHERE id_u='$this->id_u'";
        $mostrar = $conexion->stm->prepare($sql);
        $mostrar->execute();
        $objetoretornadousuario = $mostrar->fetchAll(PDO::FETCH_OBJ);
        return $objetoretornadousuario;
    }
    public function EliminarUsuario(){
        $conexion = new Conexion();
        $sql = "DELETE FROM tbl_usuarios_registrados WHERE id_u='$this->id_u'";
        $usuario = $conexion->stm->prepare($sql);
        $usuario->execute();
    }
    protected function ActualizarUsuarioBd(){
        $conexion = new Conexion();
        $sql = "UPDATE tbl_usuarios_registrados SET correo_u='$this->correo_u',nombre_u='$this->nombre_u',contrasena_u='$this->contrasena_u',centro_u='$this->centro_u' WHERE id_u='$this->id_u'";
        $actualizar = $conexion->stm->prepare($sql);
        $_SESSION['nombre_u'] = $this->nombre_u;
        $actualizar->execute();
    }

}

    
?>