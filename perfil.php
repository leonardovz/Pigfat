<?php session_start();

	require 'admin/admin.php';
	require 'php/funciones.php';

if ($_SESSION['type']=='Admin') {
	$conexion = conexion($Paginacion,$Usuario, $Password);

	$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1 ;
	$postPorPagina = 8 ;

	$inicio =($pagina >1) ? ($pagina * $postPorPagina -$postPorPagina) : 0;

	$articulos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM Usuarios LIMIT $inicio ,$postPorPagina");
	$articulos->execute();
	$articulos=$articulos->fetchAll();

	$totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');
	$totalArticulos= $totalArticulos->fetch()['total'];
	$numeroPagina = ceil($totalArticulos/ $postPorPagina);

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
		$password = $_POST['pass'];
		$password2 = $_POST['rpass'];
		$tipoUser = $_POST['tipoUser'];
		
		$errores = '';
		if (empty($usuario) or empty($password) or empty($password2)) {
			$errores .= '<p class = "alert-link">Por favor rellena todos los datos correctamente</p class = "alert-link">';
		} else {
			
			$conexion = conexion($Paginacion,$Usuario,$Password);
			$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
			$statement->execute(array(':usuario' => $usuario));
			$resultado = $statement->fetch();
			if ($resultado != false) {
				$errores .= '<p class = "alert-link">El nombre de usuario ya existe</p class = "alert-link">';
			}
			if ($password != $password2) {
				$errores .= '<p class = "alert-link">Las contraseñas no son iguales</p class = "alert-link">';
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
	require 'views/Perfil.view.php';
} else {
	header('Location: login.php');
}

?>