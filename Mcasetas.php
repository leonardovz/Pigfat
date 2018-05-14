<?php session_start();

	require 'admin/admin.php';
	require 'php/funciones.php';

if (isset($_SESSION['usuario'])) {

	require 'views/Modificar_caseta.php';

} else {
	header('Location: login.php');
}

?>