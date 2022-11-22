<?php

class SesionController{

    public function __construct()
    {
        session_start();
    }

    public function RedireccionarUsuarios()
    {
        header("location: UsersController.php?action=register");
    }
}

?>