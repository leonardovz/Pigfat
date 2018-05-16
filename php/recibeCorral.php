<?php

include "config.php";

$numCorral = $_POST['numCorral'];
$estadoCorral = $_POST['estadoCorral'];
$idRaza = $_POST['idRaza'];

$insertar = "INSERT INTO corrales(numCorral, estadoCorral,idRaza) VALUES ('$numCorral','$estadoCorral','$idRaza')";

$query = mysql_query($insertar) or die (mysql_error());
header('Location: ../contenido.php');


?>
