<?php session_start();

require 'admin/admin.php';
require 'php/funciones.php';

if (isset($_SESSION['usuario'])) {
	require 'php/config.php';
	//Suma todos los nacidos de la tabla partos
    $sqlSumaNacidos = 'SELECT SUM(totalNAcidos) FROM partos';
    $querySumaNacidos = mysql_query($sqlSumaNacidos);
    $totalNacidos;
    while($row=mysql_fetch_array($querySumaNacidos)){
        $totalNacidos=$row[0];
    }
    
    //Total de lechones machos nacidos vivos
    $sqlSumaMachosNacidos = 'SELECT SUM(nacidosVivosMachos) FROM partos';
    $querySumaMachosNacidos = mysql_query($sqlSumaMachosNacidos);
    $totalMachosNacidos;
    while($row=mysql_fetch_array($querySumaMachosNacidos)){
        $totalMachosNacidos=$row[0];
    }

    //Total de lechones machos nacidos muertos
    $sqlSumaMachosMuertos = 'SELECT SUM(nacidosMuertosMachos) FROM partos';
    $querySumaMachosMuertos = mysql_query($sqlSumaMachosMuertos);
    $totalMachosMuertos;
    while($row=mysql_fetch_array($querySumaMachosMuertos)){
        $totalMachosMuertos=$row[0];
    }

    //Total de lechones hembra nacidos vivas
    $sqlSumaHembrasVivas = 'SELECT SUM(nacidosVivosHembras) FROM partos';
    $querySumaHembrasVivas = mysql_query($sqlSumaHembrasVivas);
    $totalHembrasVivas;
    while($row=mysql_fetch_array($querySumaHembrasVivas)){
        $totalHembrasVivas=$row[0];
    }
	//Total de lechones hembra nacidos muertas
    $sqlSumaHembrasMuertas = 'SELECT SUM(nacidosMuertosHembras) FROM partos';
    $querySumaHembrasMuertas = mysql_query($sqlSumaHembrasMuertas);
    $totalHembrasMuertas;
    while($row=mysql_fetch_array($querySumaHembrasMuertas)){
        $totalHembrasMuertas=$row[0];
    }
    //Total de promedio de peso al nacer
    $sqlTotalPromediosCamada = 'SELECT SUM(pesoCamada) FROM partos';
    $queryTotalPromediosCamada = mysql_query($sqlTotalPromediosCamada);
    $totalPromediosCamada;
    while($row=mysql_fetch_array($queryTotalPromediosCamada)){
        $totalPromediosCamada=$row[0];
    }

	//Numero total de cerdos que salen de lactancia
    $sqlSumaCerdosLactancia = 'SELECT SUM(numCerdosLactancia) FROM lactancias';
    $querySumaCerdosLactancia = mysql_query($sqlSumaCerdosLactancia);
    $totalCerdosLactancia;
    while($row=mysql_fetch_array($querySumaCerdosLactancia)){
        $totalCerdosLactancia=$row[0];
	}
	
	//Suma total de los kg totales de los animales al salir de lactancia
    $sqlPesoCamadaLactancia = 'SELECT SUM(pesoCamadaLactancia) FROM lactancias';
    $queryPesoCamadaLactancia = mysql_query($sqlPesoCamadaLactancia);
    $totalPesoCamadaLactancia;
    while($row=mysql_fetch_array($queryPesoCamadaLactancia)){
        $totalPesoCamadaLactancia=$row[0];
    }

    $mysqli = new mysqli("localhost", $Usuario, $Password, $DataBase);


    //Determinar el numero de filas registradas en el la tabla partos
    $sqlTotalPartos = $mysqli->query("SELECT totalNacidos FROM partos");
    $totalPartos = $sqlTotalPartos->num_rows;

    //Numero total de hembras registradas
    $sqlHembras = $mysqli ->query("SELECT idCerda FROM cerdas");
    $numHembras = $sqlHembras->num_rows;

    //Numero total de machos registrados
    $sqlMachos = $mysqli -> query("SELECT idCerdo FROM sementales");
    $numMachos = $sqlMachos->num_rows;
	
	$conexion = conexion($Paginacion,$Usuario,$Password);

	$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1 ;
	$postPorPagina = 8 ;

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

	require 'views/Destete.view.php';
} else {
	header('Location: login.php');
}

?>