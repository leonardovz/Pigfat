<?php session_start();

if (isset($_SESSION['usuario'])) {
	 require 'views/Ingresar_Partos.view.php';
} else {
	header('Location: login.php');
}

?>