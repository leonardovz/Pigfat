<?php 
require '../php/config.php';
$idVenta = $_POST['idVenta'];
$fechaVenta = $_POST['fechaVenta'];
$numCerdos = $_POST['numCerdos'];
$kgTotales = $_POST['kgTotales'];
$precioKg = $_POST['precioKg'];
$pesoPromedioCerdo = round(($kgTotales / $numCerdos),2);
$totalDinero = $kgTotales * $precioKg;

$update = "UPDATE `ventas` SET `fechaVenta`= '$fechaVenta',`numCerdos`= '$numCerdos',`kgTotales`= '$kgTotales',`precioKg`= '$precioKg',`pesoPromedioCerdo`= '$pesoPromedioCerdo',`totalDinero`= '$totalDinero' WHERE  idVenta='$idVenta';";
echo $update;

$query = mysql_query($update) or die (mysql_error());

header('Location: ../ventas.php');


?>