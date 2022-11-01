<?php
class User{
    protected $idu;
    protected $nombreu; //1//
    protected $emailu; //2//
    protected $contrasenau; //3//
    protected $centrou; //4//



//este modelo es el unico que va a conectar a base de datos

    protected function GuardarUsuario()
    {
        include '../Config/Conexion.php';
        $conexion = new Conexion();
        $sql = "INSERT INTO tbl_usuarios_registrado(nombre_u,correo_u,contrasena_u,centro_u) VALUES (?,?,?,?)";
        $insertar = $conexion->stm->prepare($sql);
        $insertar->bindParam(1,$this->nombre_u);
        $insertar->bindParam(2,$this->email_u);
        $insertar->bindParam(3,$this->contrasena_u);
        $insertar->bindParam(4,$this->centro_u);
        $insertar->execute();

    }
    public function ConsultarUsuarioEnBd()
    {
        include '../Config/Conexion.php';
        $conexion = new Conexion();
        $sql = "SELECT * FROM tbl_usuarios_registrado WHERE emailu='$this->emailu'";
        $usuario = $conexion->stm->prepare($sql);
        $usuario->execute();
        $usuarioobjeto = $usuario->fetchAll(PDO::FETCH_OBJ);
        return $usuarioobjeto;
    }
    protected function BuscarUsuario(){
        $conexion = new Conexion();
        $sql = "SELECT * FROM tbl_usuarios_registrado WHERE idu='$this->idu'";
        $mostrar = $conexion->stm->prepare($sql);
        $mostrar->execute();
        $objetoretornadousuario = $mostrar->fetchAll(PDO::FETCH_OBJ);
        return $objetoretornadousuario;
    }
    public function BorrarUsuario($borrar){
        include '../Config/Conexion.php';
        $conexion = new Conexion();
        $sql = "DELETE FROM usuariosr WHERE idu='$borrar'";
        $usuario = $conexion->stm->prepare($sql);
        $usuario->execute();
    }

}

    
?>