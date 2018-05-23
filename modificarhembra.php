<?php session_start();

require 'admin/admin.php';
require 'php/funciones.php';

if (isset($_SESSION['usuario'])) {

    require 'php/config.php';

    $idCerda = $_GET['idCerda'];
    //Busqueda de datos de las cerdas
    $sqlCerdas = "SELECT * FROM cerdas WHERE idCerda='$idCerda'";
    $queryCerdas = mysql_query($sqlCerdas);
    $row=mysql_fetch_array($queryCerdas);
    $idCerda = $row[0];
    $fechaNacimiento = $row[1];
    $idRaza = $row[2];
    $numPartos = $row[3];
    $estadoCerda = $row[4];
    $idPArto = $row[5];

    require 'views/modificarhembra.view.php';
} else {
	header('Location: login.php');
}


?>