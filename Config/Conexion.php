<?php
class Conexion{
    public $stm;
    //CONSTRUCTOR 
    public function __construct(){
        try {
            //LO QUE ORDENE VA A INTENTAR HACER
            $this->stm = new PDO("mysql:host=localhost;dbname=urbantrade",'root','');
            }catch (PDOException $error) {
            //NOS MUESTRA EL ERROR EN UNA VARIBALE
            echo "error en ->" . $error->getMessage();
        }
    }
}
?>