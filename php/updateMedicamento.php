<?php

include "config.php";
$id = $_POST['id'];
$idMedicamento = $_POST['idMedicamento'];
$principioActivo = $_POST['principioActivo'];
$nombreMedicamento = $_POST['nombreMedicamento'];
$laboratorioProcedencia = $_POST['laboratorioProcedencia'];
$cantidad = $_POST['cantidad'];
$viaSuministro = $_POST['viaSuministro'];

$insertar = "UPDATE `medicamentos` SET `principioActivo`='$principioActivo',`nombreMedicamento`='$nombreMedicamento',`laboratorioProcedencia`='$laboratorioProcedencia',`cantidad`='$cantidad',`viaSuministro`='$viaSuministro' WHERE idMedicamento = '$id'";
echo $insertar;
$query = mysql_query($insertar) or die (mysql_error());

header('Location: ../Medicamentos_y_vacunas.php');
?>
