<?php session_start();

if (isset($_SESSION['usuario'])) {
	 require 'views/mostrarRegistros.view.php';
} else {
	header('Location: login.php');
}
?>