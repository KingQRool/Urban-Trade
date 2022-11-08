<?php 

class Conexion{
    public $stm;
    //metodos magicos - metodos constructores - metodos destructores
    public  function __construct()

    {
        try{
            $this->stm = new PDO("mysql:host=localhost;dbname=urbantrade",'root','');
        }
        catch (PDOException $error)
        {
            echo "error en :->" . $error->getmessage();
        }
    }
}
$conexion = new Conexion(); 
?>