<?php
if (isset($_SESSION['type'])=='Admin') {
$iduser = $_POST['iduser'];
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$tipoUser = $_POST['Rango'];

$insertar = "UPDATE `usuarios` SET `usuario`='$usuario',`pass`='$pass',`Rango`='$tipoUser' WHERE id = $iduser";
// echo $insertar;
$query = mysql_query($insertar) or die (mysql_error());

header('Location: ../perfil.php');
}else ('Location: ../index.php');
?>
