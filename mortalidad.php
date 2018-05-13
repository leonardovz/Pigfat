<?php session_start();

require 'admin/admin.php';
require 'php/funciones.php';

if (isset($_SESSION['usuario'])) {

	$conexion = conexion($Paginacion,$Usuario,$Password);

	$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1 ;
	$postPorPagina = 4;

	$inicio =($pagina >1) ? ($pagina * $postPorPagina -$postPorPagina) : 0;

	$articulos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM paginacion LIMIT $inicio ,$postPorPagina");
	$articulos->execute();
	$articulos=$articulos->fetchAll();
	// print_r($articulos);

	// Para conocer si hay valores
	if(!$articulos){
		header('Location: contenido.php');
	}
	//Hace una seleccion para realizar un conteo de productos
	$totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');
	$totalArticulos= $totalArticulos->fetch()['total'];
	// Para mostrar el Total de los articulos
	// echo $totalArticulos;

	$numeroPagina = ceil($totalArticulos/ $postPorPagina);

	require 'views/mortalidad.view.php';
} else {
	header('Location: login.php');
}

?>