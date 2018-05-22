<?php

include "config.php";

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$tipoUser = $_POST['Rango'];

$insertar = "INSERT INTO `usuarios`(`usuario`, `pass`, `Rango`) VALUES ('$usuario','$pass','$tipoUser');";
// echo $insertar;
$query = mysql_query($insertar) or die (mysql_error());

header('Location: ../Medicamentos_y_vacunas.php?id=2');
?>
