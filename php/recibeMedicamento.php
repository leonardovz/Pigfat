<?php

include "config.php";

$principioActivo = $_POST['principioActivo'];
$nombreMedicamento = $_POST['nombreMedicamento'];
$laboratorioProcedencia = $_POST['laboratorioProcedencia'];
$cantidad = $_POST['cantidad'];
$viaSuministro = $_POST['viaSuministro'];

$insertar = "INSERT INTO `medicamentos`(`principioActivo`, `nombreMedicamento`, `laboratorioProcedencia`, `cantidad`, `viaSuministro`) VALUES ('$principioActivo','$nombreMedicamento','$laboratorioProcedencia','$cantidad','$viaSuministro');";
// echo $insertar;
$query = mysql_query($insertar) or die (mysql_error());

header('Location: ../Medicamentos_y_vacunas.php');
?>
