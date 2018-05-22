<?php

    include "config.php";
    $idParto = $_POST['idParto'];
    $pesoCamada = $_POST['pesoCamada'];
    $numCerdos = $_POST['numCerdos'];
    $diasLactancia = $_POST['diasLactancia'];
    $asignarDestete = "SELECT idParto, totalNacidos FROM partos WHERE idParto='$idParto'";
    $queryDestete = mysql_query($asignarDestete) or die (mysql_error());
    $fila = mysql_fetch_array($queryDestete);//despliegue de columnas y filas
    $totalNacidos = $fila[1];
    echo $fila[0].'      '.$totalNacidos.'<br>'; 

    $cambiarEstado = "UPDATE partos SET estado='engorda' WHERE idParto='$idParto'";
    $queryEstado = mysql_query($cambiarEstado) or die (mysql_error());

    $insertarLactancia = "INSERT INTO lactancias(idLactancia,numCerdos21Dias,pesoCamada21Dias,diasLactancia,numCerdosLactancia,pesoCamadaLactancia,fechaProgramadaVacunas,fechaRealVacunas,idParto) VALUES('','','','$diasLactancia','$numCerdos','$pesoCamada','','','$idParto')";
    $queryLactancia = mysql_query($insertarLactancia) or die (mysql_error());

    header("Location: ../Destete.php");
    
?>