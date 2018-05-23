<?php 

session_start();
    require 'admin/admin.php';
	require 'php/funciones.php';
if (isset($_SESSION['usuario'])) {
    require 'php/config.php';
    
	$sqlApareamiento="SELECT idApareamiento FROM apareamientos WHERE estadoApareamiento='curso'";
    $queryApareamiento = mysql_query($sqlApareamiento) or die (mysql_error());
    
    $mysqli = new mysqli("localhost", $Usuario, $Password, $DataBase);


    //Determinar el numero de filas registradas en el la tabla partos
    $sqlTotalApareamientos = $mysqli->query("SELECT idApareamiento FROM apareamientos WHERE estadoApareamiento='curso'");
    $totalApareamientos = $sqlTotalApareamientos->num_rows;

    //Determinar el numero de filas registradas con la busqueda por terminado
    $sqlTotalTerminados = $mysqli->query("SELECT idApareamiento FROM apareamientos WHERE estadoApareamiento='terminado'");
    $totalTerminados = $sqlTotalTerminados->num_rows;

    //Determinar el numero de filas registradas con la busqueda por terminado
    $sqlTotalInterrumpidos = $mysqli->query("SELECT idApareamiento FROM apareamientos WHERE estadoApareamiento='interrumpido'");
    $totalInterrumpidos = $sqlTotalInterrumpidos->num_rows;

    //Query para las hembras
	$sqlHembras="SELECT idCerda FROM cerdas WHERE estadoCerda='produccion'";
    $queryHembras = mysql_query($sqlHembras) or die (mysql_error());
    
    //Query para los machos
	$sqlMachos="SELECT idCerdo FROM sementales WHERE estadoCerdo='produccion'";
    $queryMachos = mysql_query($sqlMachos) or die (mysql_error());
    
    $conexion = conexion($Paginacion,$Usuario,$Password);

	$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1 ;
	$postPorPagina = 8 ;

	$inicio =($pagina >1) ? ($pagina * $postPorPagina -$postPorPagina) : 0;

	$articulos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM apareamientos LIMIT $inicio ,$postPorPagina");
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
    require 'views/apareamiento.view.php';
    
    

	
} else {
	header('Location: login.php');
}

?>