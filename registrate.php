<?php session_start();
	require 'admin/admin.php';
	require 'php/funciones.php';
if (!isset($_SESSION['usuario'])) {
	header('Location: index.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['pass'];
	$password2 = $_POST['rpass'];
	$tipoUser = $_POST['tipoUser'];
	
	$errores = '';
	if (empty($usuario) or empty($password) or empty($password2)) {
		$errores .= '<li>Por favor rellena todos los datos correctamente</li>';
	} else {
		
		$conexion = conexion($Paginacion,$Usuario,$Password);
		$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
		$statement->execute(array(':usuario' => $usuario));
		$resultado = $statement->fetch();
		if ($resultado != false) {
			$errores .= '<li>El nombre de usuario ya existe</li>';
		}
		if ($password != $password2) {
			$errores .= '<li>Las contraseñas no son iguales</li>';
		}
	}
	if ($errores == '') {
		// $password = hash('sha512' , $password);
		$statement = $conexion->prepare('INSERT INTO usuarios (id, usuario, pass,tipoUser) VALUES (null, :usuario, :pass,:tipoUser)');
		$statement->execute(array(
			':usuario' => $usuario,
			':pass' => $password,
			'tipoUser' => $tipoUser
		));
		header('Location: perfil.php');
	}
}
require 'views/perfil.view.php';
?>