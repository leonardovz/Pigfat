<?php session_start();

	require 'admin/admin.php';
	require 'php/funciones.php';

if (isset($_SESSION['usuario'])) {
	require 'php/config.php';

	//Suma hermanos nacidos
    $sqlHermanosNacidos = 'SELECT SUM(numHermanosNacidos) FROM sementales';
    $queryHermanosNacidos = mysql_query($sqlHermanosNacidos);
    $totalHermanosNacidos;
    while($row=mysql_fetch_array($queryHermanosNacidos)){
        $totalHermanosNacidos=$row[0];
	}
	
	//Suma hermanos destete
    $sqlHermanosDestete = 'SELECT SUM(numHermanosDestete) FROM sementales';
    $queryHermanosDestete = mysql_query($sqlHermanosDestete);
    $totalHermanosDestete;
    while($row=mysql_fetch_array($queryHermanosDestete)){
        $totalHermanosDestete=$row[0];
	}
	
	//Suma peso destete
    $sqlPesoDestete = 'SELECT SUM(pesoNacimiento) FROM sementales';
    $queryPesoDestete = mysql_query($sqlPesoDestete);
    $totalPesoDestete;
    while($row=mysql_fetch_array($queryPesoDestete)){
        $totalPesoDestete=$row[0];
	}
	
	//Suma peso nacimiento
    $sqlPesoNacimiento = 'SELECT SUM(pesoDestete) FROM sementales';
    $queryPesoNacimiento = mysql_query($sqlPesoNacimiento);
    $totalPesoNacimieto;
    while($row=mysql_fetch_array($queryPesoNacimiento)){
        $totalPesoNacimieto=$row[0];
    }


	$mysqli = new mysqli("localhost", $Usuario, $Password, $DataBase);

	//Numero de sementales con estado de produccion
    $sqlSementales = $mysqli->query("SELECT idCerdo FROM sementales WHERE estadoCerdo='produccion'");
	$totalSementalesProduccion = $sqlSementales->num_rows;
	
	//Numero de sementales total
    $sqlSementalesT = $mysqli->query("SELECT idCerdo FROM sementales");
    $totalSementales = $sqlSementalesT->num_rows;

	$promedioSemNac=$totalHermanosNacidos/$totalSementales;
	$promedioSemDest=$totalHermanosDestete/$totalSementales;
	$promedioPesoNac=$totalPesoNacimieto/$totalSementales;
	$promedioPesoDest=$totalPesoDestete/$totalSementales;
	$conexion = conexion($Paginacion,$Usuario,$Password);

	$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1 ;
	$postPorPagina = 8 ;

	$inicio =($pagina >1) ? ($pagina * $postPorPagina -$postPorPagina) : 0;

	$articulos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM sementales WHERE estadoCerdo='produccion' LIMIT $inicio ,$postPorPagina");
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

	require 'views/Sementales.view.php';
} else {
	header('Location: login.php');
}

?>