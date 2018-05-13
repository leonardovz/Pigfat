<?php
include "config.php";

$id = $_POST['idParto'];
$idraza = $_POST['idRaza'];
$idRazaMacho = $_POST['idRazaMacho'];
$numParto = $_POST['numParto'];
$fechaDesteteAnterior = $_POST['fechaDesteteAnterior'];
$fechaPrenez = $_POST['fechaPrenez'];
$diasAbiertos = $_POST['diasAbiertos'];
$fechaParto = $_POST['fechaParto'];
$nacidosVivosMachos = $_POST['nacidosVivosMachos'];
$nacidosVivosMachos = $_POST['nacidosMuertosMachos'];
$nacidosVivosHembras = $_POST['nacidosVivosHembras'];
$nacidosMuertosHembras = $_POST['nacidosMuertosHembras'];
$totalnacidos = $_POST['totalnacidos'];
$pesoPromedioCamada = $_POST['pesoPromedioCamada'];
$estado = $_POST['estado'];

$insertar = "INSERT INTO partos(idParto, idRaza, idRazaMacho, numParto ,fechaDesteteAnterior, fechaPrenez, diasAbiertos, fechaParto, nacidosVivosMachos, nacidosMuertosMachos, nacidosVivosHembras, nacidosMuertosHembras, totalnacidos, pesoPromedioCamada,estado) VALUES ('$cod','$idRaza','$idRazaMacho','$numParto','$fechaDesteteAnterior','$fechaPrenez','$diasAbiertos','$fechaParto','$nacidosVivosMachos','$nacidosMuertosMachos','$nacidosVivosHembras','$nacidosMuertosHembras','$totalnacidos','$pesoPromedioCamada','$estado')";

$query = mysql_query($insertar) or die (mysql_error());

header('Location: ../contenido.php');

?>