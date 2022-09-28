<?php 

$nombreu = $_POST['nombreu'];
$emailu = $_POST['emailu'];
$contrasenau = $_POST['contrasenau'];
$centrou= $_POST['centrou'];

echo "Se a agregado en la base de datos a:" . "<br>";

echo $nombreu . "<br>";
echo $emailu . "<br>";
echo $contrasenau . "<br>";
echo $centrou . "<br>";
include 'Config\Conexion.php';

$conexion = new Conexion();
$conexion->BdConnect();
$sql = "INSERT INTO usuariosr(nombreu,emailu,contrasenau,centrou) VALUES ('$nombreu','$emailu','$contrasenau','$centrou');";

$insertar = $conexion->stm->prepare($sql);
$insertar->execute();

header("location:ListadoPersonas.php");
?>
