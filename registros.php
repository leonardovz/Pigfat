<?php session_start();

if (isset($_SESSION['usuario'])) {
	require 'php/config.php';
	$sqlEngorda="SELECT idParto FROM partos WHERE estado='engorda'";
	$queryEngorda = mysql_query($sqlEngorda) or die (mysql_error());

	// SQL para cargar los preniamientosen curso
	$sqlPreniamientos="SELECT idApareamiento FROM apareamientos WHERE estadoApareamiento='curso'";
	$queryPreniamientos = mysql_query($sqlPreniamientos) or die (mysql_error());

	require 'views/Ingresar_Partos.view.php';
	
} else {
	header('Location: login.php');
}

?>