<?php session_start();

	require 'admin/admin.php';
	require 'php/funciones.php';

if (isset($_SESSION['usuario'])) {

	require 'php/config.php';

    //Total de lechones machos nacidos vivos
    $sqlSumaMachosEngorda = "SELECT SUM(nacidosVivosMachos) FROM partos WHERE estado='engorda'";
    $querySumaMachosEngorda = mysql_query($sqlSumaMachosEngorda);
    $totalMachosEngorda;
    while($row=mysql_fetch_array($querySumaMachosEngorda)){
        $totalMachosEngorda=$row[0];
	}
	
	$mysqli = new mysqli("localhost", $Usuario, $Password, $DataBase);

	//Determinar el numero de filas registradas en el la tabla partos
    $sqlTotalHembras = $mysqli->query("SELECT idCerda FROM cerdas WHERE estadoCerda='produccion'");
    $totalHembras = $sqlTotalHembras->num_rows;

	//Determinar el numero de filas registradas en el la tabla partos
    $sqlTotalPartos = $mysqli->query("SELECT totalNacidos FROM partos");
	$totalPartos = $sqlTotalPartos->num_rows;
	
	//Determinar el numero de filas registradas en el la tabla partos
    $sqlTotalSementales = $mysqli->query("SELECT idCerdo FROM sementales WHERE estadoCerdo='produccion'");
    $totalSementales = $sqlTotalSementales->num_rows;

	$numFM = $totalHembras/$totalSementales;
	
	$conexion = conexion($Paginacion,$Usuario,$Password);

	$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1 ;
	$postPorPagina = 8 ;

	$inicio =($pagina >1) ? ($pagina * $postPorPagina -$postPorPagina) : 0;

	$articulos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM cerdas LIMIT $inicio ,$postPorPagina");
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

	require 'views/maternidad.view.php';
} else {
	header('Location: login.php');
}

?>