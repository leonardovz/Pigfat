<?php

include "config.php";

$idCorral = $_POST['idCorral'];
$numCorral = $_POST['numCorral'];
$estadoCorral = $_POST['estadoCorral'];

$insertar = "INSERT INTO corrales(idCorral, numCorral, estadoCorral) VALUES ('$idCorral','$numCorral','$estadoCorral')";

$query = mysql_query($insertar) or die (mysql_error());


?>
