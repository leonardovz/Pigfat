<?php

session_start();


if (isset($_SESSION['usuario'])) {
    require 'config.php';
    
    $idHembra = $_POST['idHembra'];
    $idMacho = $_POST['idMacho'];
    $montaUno = $_POST['montaUno'];
    $montaDos = $_POST['montaDos'];
    $fechaAproximanda = $_POST['fechaAproximada'];

    $sqlRegisroApareamiento="INSERT INTO apareamientos(idApareamiento, idHembra, idMacho, montaUno, montaDos, fechaAproximadaNacimiento, estadoApareamiento) VALUES('','$idHembra','$idMacho','$montaUno','$montaDos','$fechaAproximanda','curso')";
    $queryRegistroApareamiento = mysql_query($sqlRegisroApareamiento) or die (mysql_error());

    $sqlCambioEstado = "UPDATE cerdas SET estadoCerda='prenez' WHERE idCerda='$idHembra'";
    $queryCambioEstado = mysql_query($sqlCambioEstado) or die(mysql_error());
    header("Location: ../apareamiento.php");
    
}else {
	header('Location: ../login.php');
}
?>