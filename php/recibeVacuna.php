<?php

include "config.php";

$principioActivo = $_POST['principioActivo'];
$enfermedadPreventiva = $_POST['enfermedadPreventiva'];
$cantidadVacunas = $_POST['cantidadVacunas'];
$observaciones = $_POST['observaciones'];

$insertar = "INSERT INTO `vacunas`(`principioActivo`, `enfermedadPreventiva`, `cantidadVacunas`, `observaciones`) VALUES ('$principioActivo','$enfermedadPreventiva','$cantidadVacunas','$observaciones');";
echo $insertar;
$query = mysql_query($insertar) or die (mysql_error());

header('Location: ../Medicamentos_y_Vacunas.php');
?>
