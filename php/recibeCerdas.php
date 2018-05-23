<?php

include "config.php";
date_default_timezone_set('America/Mexico_city');
$idCamada = $_POST['idCamada'];
$idRaza = $_POST['idRaza'];
$fechaNacimiento = date('Y-m-d');

if($idCamada == 200000){
    $insertar = "INSERT INTO cerdas(idCerda, fechaNacimiento, idRaza, numPartos, estadoCerda, idParto) VALUES('','$fechaNacimiento','$idRaza','0','produccion','$idCamada')";
    $query = mysql_query($insertar) or die (mysql_error());
    
}else{
    $sqlDatos = "SELECT fechaParto, numParto FROM partos WHERE idParto='$idCamada'";
    $queryDatos = mysql_query($sqlDatos) or die (mysql_error());
    $fila = mysql_fetch_array($queryDatos);
    $numParto = $fila[1];
    $fechaNacimiento = $fila[0];
    $insertar = "INSERT INTO cerdas(idCerda, fechaNacimiento, idRaza, numPartos, estadoCerda, idParto) VALUES ('','$fechaNacimiento','$idRaza','$numParto','produccion','$idCamada')";
    $query = mysql_query($insertar) or die (mysql_error());
}





header('Location: ../registros.php#seccion2');
?>
