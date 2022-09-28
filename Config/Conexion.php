<?php 

class Conexion{
    public $stm;
    //metodos magicos - metodos constructores - metodos destructores
    public  function __construct()

    {
        try{
            $this->stm = new PDO("mysql:host=localhost;dbname=urbantrade",'root','');
        }
        catch (PDOExeption $error)
        {
            echo "error en :->" . $error->getmessage();
        }
    }
}
$conexion = new Conexion(); 
?>