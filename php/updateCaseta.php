<?php 

include "config.php";

$idCorral = $_POST['idCorral'];
$numCorral = $_POST['numCorral'];
$estadoCorral = $_POST['estadoCorral'];
$idRaza = $_POST['idRaza'];

$Editar = "UPDATE corrales SET idCorral = '$idCorral' , numCorral = '$idCorral' , estadoCorral = '$estadoCorral' , idRaza = '$idRaza' WHERE idCorral = '$idCorral'";

$query = mysql_query($Editar) or die (mysql_error());



header('Location: ../contenido.php');


?>