<?php session_start();

	require 'admin/admin.php';
	require 'php/funciones.php';

if (isset($_SESSION['usuario'])) {

	require 'views/Registro_caseta.view.php';

} else {
	header('Location: index.php');
}

?>