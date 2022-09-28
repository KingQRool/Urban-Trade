<?php 
$idu = $_POST['idu'];
$nombreu = $_POST['nombreu'];
$emailu = $_POST['emailu'];
$contrasenau = $_POST['contrasenau'];
$centrou = $_POST['centrou'];

include 'Config\Conexion.php';

$conectar = new Conexion();
// $conectar->BdConnect();
$sql = "UPDATE usuariosr SET nombreu='$nombreu',emailu='$emailu',contrasenau='$contrasenau',centrou='$centrou' WHERE idu=$idu";

$insertar = $conectar->stm->prepare($sql);
$insertar->execute();

header("location:Listadopersonas.php");

?>