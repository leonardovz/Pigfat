<?php session_start();

	require 'admin/admin.php';
	require 'php/funciones.php';

if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
}

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	// $password = hash('sha512' , $password);

	$conexion = conexion($Paginacion,$Usuario,$Password);
	$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :password');
	$statement->execute(array(
		':usuario' => $usuario,
		':password' => $password
	));
	$RECARGADO = obtener_nombre($usuario, $conexion);
	$resultado = $statement->fetch();
	if ($resultado !== false) {
		$_SESSION['usuario'] = $RECARGADO[1];
		$_SESSION['type'] = $RECARGADO[3];
		header('Location: index.php');
	} else {
		$errores .= '<li>Datos Incorrectos</li>';
	}
}

require 'views/login.view.php';

?>