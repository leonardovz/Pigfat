<?php

include "config.php";

$idVacuna = $_POST['id'];
$principioActivo = $_POST['principioActivo'];
$enfermedadPreventiva = $_POST['enfermedadPreventiva'];
$cantidadVacunas = $_POST['cantidadVacunas'];
$observaciones = $_POST['observaciones'];

$insertar = "UPDATE `vacunas` SET `principioActivo`= '$principioActivo',`enfermedadPreventiva`= '$enfermedadPreventiva',`cantidadVacunas`= '$cantidadVacunas',`observaciones`= '$observaciones' WHERE idVacuna= '$idVacuna'";
echo $insertar;
$query = mysql_query($insertar) or die (mysql_error());

header('Location: ../Medicamentos_y_vacunas.php');
?>
