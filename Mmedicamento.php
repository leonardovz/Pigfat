<?php session_start();

	require 'admin/admin.php';
	require 'php/funciones.php';

if (isset($_SESSION['usuario'])) {

	require 'views/Modificar_Medicamentos.php';

} else {
	header('Location: login.php');
}

?>