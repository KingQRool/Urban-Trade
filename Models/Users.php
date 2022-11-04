<?php
class User{
    protected $idu;
    protected $nombreu; //1//
    protected $emailu; //2//
    protected $contrasenau; //3//
    protected $centrou; //4//
    protected $fotoj; //5//
    protected $foto_url; //6//



//este modelo es el unico que va a conectar a base de datos

    protected function GuardarUsuario()
    {
        include '../Config/Conexion.php';
        $conexion = new Conexion();
        $sql = "INSERT INTO tbl_usuarios_registrado (nombreu,emailu,contrasenau,centrou,foto,foto_url) VALUES (?,?,?,?,?,?)";
        $insertar = $conexion->stm->prepare($sql);
        $insertar->bindParam(1,$this->nombreu);
        $insertar->bindParam(2,$this->emailu);
        $insertar->bindParam(3,$this->contrasenau);
        $insertar->bindParam(4,$this->centrou);
        $insertar->bindParam(5,$this->foto);
        $insertar->bindParam(6,$this->foto_url);
        $insertar->execute();

        echo "guardo con exito";
    }
    public function ConsultarUsuarioEnBd()
    {
        include '../Config/Conexion.php';
        $conexion = new Conexion();
        $sql = "SELECT * FROM usuariosr WHERE emailu='$this->emailu'";
        $usuario = $conexion->stm->prepare($sql);
        $usuario->execute();
        $usuarioobjeto = $usuario->fetchAll(PDO::FETCH_OBJ);
        return $usuarioobjeto;
    }
    public function BorrarUsuario($borrar){
        include '../Config/Conexion.php';
        $conexion = new Conexion();
        $sql = "DELETE FROM usuariosr WHERE idu='$borrar'";
        $usuario = $conexion->stm->prepare($sql);
        $usuario->execute();
    }

//     public function ActUsuario($idu)
//     {
//         include '../Config/Conexion.php';
//         $conexion = new Conexion();
//         $sql = "SELECT * FROM usuariosr WHERE idu=$idu";
      
        
//         $consulta = $conexion->stm->prepare($sql);
// $consulta->execute();
// $persona = $consulta->fetchAll(PDO::FETCH_OBJ);
// // var_dump($persona);
// foreach($persona as $p){}
//     }
}

    
    ?>