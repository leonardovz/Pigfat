<?php
include "config.php";

$isApareamiento = $_POST['idApareamiento'];
$idraza = $_POST['idRaza'];
$numParto = $_POST['numParto'];
$fechaPrenez = $_POST['fechaPrenez'];
$fechaParto = $_POST['fechaParto'];
$nacidosVivosMachos = $_POST['nacidosVivosMachos'];
$nacidosMuertosMachos = $_POST['nacidosMuertosMachos'];
$nacidosVivosHembras = $_POST['nacidosVivosHembras'];
$nacidosMuertosHembras = $_POST['nacidosMuertosHembras'];
$totalnacidos = ($nacidosMuertosHembras+$nacidosMuertosMachos+$nacidosVivosHembras+$nacidosVivosMachos);
$pesoCamada = $_POST['pesoCamada'];
$pesoPromedioCamada = ($pesoCamada/$totalnacidos);


$insertar = "INSERT INTO partos(idParto, idRaza, numParto , fechaPrenez, fechaParto, nacidosVivosMachos, nacidosMuertosMachos, nacidosVivosHembras, nacidosMuertosHembras, totalnacidos, pesoPromedioCamada,estado, pesoCamada) VALUES ('','$idRaza','$numParto','$fechaPrenez','$fechaParto','$nacidosVivosMachos','$nacidosMuertosMachos','$nacidosVivosHembras','$nacidosMuertosHembras','$totalnacidos','$pesoPromedioCamada','destete','$pesoCamada')";

$query = mysql_query($insertar) or die (mysql_error());

$actualizar = "UPDATE apareamientos SET fechaRealNacimiento=$fechaParto,estadoApareamiento='terminado' WHERE idApareamiento='$isApareamiento'";

$queryActualizar = mysql_query($actualizar) or die(mysql_erro());

header('Location: ../contenido.php');

?>