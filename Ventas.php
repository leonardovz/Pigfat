<?php session_start();
	
	require 'admin/admin.php';
	require 'php/funciones.php';

if ($_SESSION['type']=='Admin') {
	$conexion = conexion($Paginacion,$Usuario, $Password);

	$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1 ;
	$postPorPagina = 8 ;

	$inicio =($pagina >1) ? ($pagina * $postPorPagina -$postPorPagina) : 0;

	$articulos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM Ventas LIMIT $inicio ,$postPorPagina");
	$articulos->execute();
	$articulos=$articulos->fetchAll();

	$totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');
	$totalArticulos= $totalArticulos->fetch()['total'];
	$numeroPagina = ceil($totalArticulos/ $postPorPagina);

	require 'views/ventas.view.php';
} else {
	header('Location: login.php');
}

?>