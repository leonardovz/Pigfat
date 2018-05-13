<?php

include "config.php";

$idCerdo = $_POST['idCerdo'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$idRaza = $_POST['idRaza'];
$pesoNacimiento = $_POST['pesoNacimiento'];
$pesoDestete = $_POST['pesoDestete'];
$razaPadre = $_POST['razaPadre'];
$razaMadre = $_POST['razaMadre'];
$numHermanosNacidos = $_POST['numHermanosNacidos'];
$numHermanosDestete = $_POST['numHermanosDestete'];

$insertar = "INSERT INTO sementales(idCerdo, fechaNacimiento, idRaza,pesoNacimiento,pesoDestete,razaPadre,razaMadre, numHermanosNacidos, numHermanosDestete) VALUES ('$idCerdo','$fechaNacimiento','$idRaza','$pesoNacimiento','$pesoDestete','$razaPadre','$razaMadre','$numHermanosNacidos','$numHermanosDestete')";

$query = mysql_query($insertar) or die (mysql_error());

header('Location: ../contenido.php');
?>
