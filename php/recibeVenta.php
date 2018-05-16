<?php
include "config.php";

$idVenta = $_POST['idVenta'];
$fechaVenta = $_POST['fechaVenta'];
$numCerdos = $_POST['numCerdos'];
$kgTotales = $_POST['kgTotales'];
$precioKg = $_POST['precioKg'];
$pesoPromedioCerdo = round(($kgTotales / $numCerdos),2);
$totalDinero = $kgTotales * $precioKg;

$insertar = "INSERT INTO ventas(idVenta, fechaVenta, numCerdos, kgTotales, precioKg, pesoPromedioCerdo, totalDinero) VALUES ($idVenta,$fechaVenta,$numCerdos,$kgTotales,$precioKg,$pesoPromedioCerdo,$totalDinero);";
echo $insertar . '<br>';
$query = mysql_query($insertar) or die (mysql_error());
header('Location: ../Ventas.php');


?>
