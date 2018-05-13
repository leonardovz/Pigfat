<?php

include "config.php";
include "funciones.php";

$conexion = conexion($db,$user,$pass);


$idCerda = $_POST['idCerda'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$idRaza = $_POST['idRaza'];
$numPartos = $_POST['numPartos'];
$fcad = $_POST['estadoCerda'];

$insertar = "INSERT INTO cerdas(idCerda, fechaNacimiento, idRaza,numPartos,estadoCerda) VALUES ('$idCerda','$fechaNacimiento','$idRaza','$numPartos','$estadoCerda')";

$statement = $conexion->prepare($insertar);
$statement->execute();
$result = $statement->fetchAll();

header('Location: ../contenido.php');
?>
