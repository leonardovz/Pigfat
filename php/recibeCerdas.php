<?php

include "config.php";

$idCerda = $_POST['idCerda'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$idRaza = $_POST['idRaza'];
$numPartos = $_POST['numPartos'];
$fcad = $_POST['estadoCerda'];

$insertar = "INSERT INTO cerdas(idCerda, fechaNacimiento, idRaza,numPartos,estadoCerda) VALUES ('$idCerda','$fechaNacimiento','$idRaza','$numPartos','$estadoCerda')";

$query = mysql_query($insertar) or die (mysql_error());
header('Location: ../contenido.php');
?>
