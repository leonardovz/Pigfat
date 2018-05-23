<?php session_start();

include "config.php";

if (isset($_SESSION['type'])=='Admin') {
$UsuarioLog = $_SESSION['usuario'];
$iduser = $_POST['iduser'];
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$tipoUser = $_POST['tipoUser'];

$insertar = "UPDATE `usuarios` SET `usuario`='$usuario',`pass`='$pass',`tipoUser`='$tipoUser' WHERE id = '$iduser' AND usuario != '$UsuarioLog'";
    echo $insertar;
    $query = mysql_query($insertar) or die (mysql_error());

header('Location: ../perfil.php');
}else 
// echo
('Location: ../index.php');
?>
