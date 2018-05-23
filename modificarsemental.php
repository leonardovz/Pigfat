<?php session_start();

require 'admin/admin.php';
require 'php/funciones.php';

if (isset($_SESSION['usuario'])) {

    require 'php/config.php';

    $idCerdo = $_GET['idCerdo'];
    //Busqueda de datos de las cerdas
    $sqlCerdas = "SELECT * FROM sementales WHERE idCerdo='$idCerdo'";
    $queryCerdas = mysql_query($sqlCerdas);
    $row=mysql_fetch_array($queryCerdas);

    $idCerdo = $row[0];
    $fechaNacimiento = $row[1];
    $idRaza = $row[2];
    $pesoNacimiento = $row[3];
    $pesoDestete = $row[4];
    $razaPadre = $row[5];
    $razaMadre = $row[6];
    $numHermanosNacidos = $row[7];
    $numHermanosDestete = $row[8];

    require 'views/modificarsemental.view.php';
} else {
	header('Location: login.php');
}


?>