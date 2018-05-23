<?php session_start();

	require 'admin/admin.php';
	require 'php/funciones.php';

if (($_SESSION['type']=='Admin')) {

	require 'views/Modificar_venta.php';

} else {
	header('Location: login.php');
}

?>