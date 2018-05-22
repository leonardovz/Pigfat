<?php

    session_start();
    date_default_timezone_set('America/Mexico_City');
    require '../admin/admin.php';
    require '../php/config.php';
    require '../php/funciones.php';

    if($_POST['reptotalnacidos'] == ''){
        echo $_POST['reptotalnacidos'];
        $totalnacidos = '';
    }else{
        $totalnacidos = ''.$_POST['reptotalnacidos'];
    }
    if($_POST['reppromedioparto'] == ''){
        echo $_POST['reppromedioparto'];
        $promedioparto = '';
    }else{
        $promedioparto = $_POST['reppromedioparto'];
    } 
    if($_POST['reptotalmachos'] == ''){
        echo $_POST['reptotalmachos'];
        $totalmachos = '';
    }else{
        $totalmachos = $_POST['reptotalmachos'];
    }
    if($_POST['repporcentajemachos'] == ''){
        echo $_POST['repporcentajemachos'];
        $porcentajemachos = '';
    }else{
        $porcentajemachos = $_POST['repporcentajemachos'];
    } 
    if($_POST['reptotalhembras'] == ''){
        echo $_POST['reptotalhembras'];
    }else{
        $totalhembras = $_POST['totalhembras'];
        $totalhembras = '';
    } 
    if($_POST['repporcentajehembras'] == ''){
        echo $_POST['repporcentajehembras'];
        $porcentajehembras = '';
    }else{
        $porcentajehembras = $_POST['repporcentajehembras'];
    } 
    if($_POST['reppesonacimiento'] == ''){
        echo $_POST['reppesonacimiento'];
        $pesonacimiento = '';
    }else{
        $pesonacimiento = $_POST['reppesonacimiento'];
    }
    if($_POST['reptotaldestetados'] == ''){
        echo $_POST['reptotaldestetados'];
        $totaldestetados = '';
    }else{
        $totaldestetados = $_POST['reptotaldestetados'];
    } 
    if($_POST['reppesodestete'] == ''){
        echo $_POST['reppesodestete'];
        $pesodestete = '';
    }else{
        $pesodestete = $_POST['reppesodestete'];
    }
    if($_POST['fechainicio'] == ''){
        echo $_POST['fechainicio'];
    }else{
        $fechainicio = $_POST['fechainicio'];
        echo $fechainicio;
    } 
    if($_POST['fechafin'] == ''){
        $fechafin = date("Y-m-d");
        echo $fechafin;
    }else{
        $fechafin = $_POST['fechafin'];
        echo $fechafin;
    }
    if($fechainicio>$fechafin){
        echo 'mal';
        header("Location: ../Destete.php?fecha=mal");
    }else {
        echo 'bien';
    }

    #Total de nacidos en un lapso de tiemposeleccionado
    $sqlSumaNacidos = "SELECT SUM(totalNacidos) FROM partos WHERE fechaParto BETWEEN '$fechainicio' AND '$fechafin'";
    $querySumaNacidos = mysql_query($sqlSumaNacidos);
    $totalNacidos;
    while($row=mysql_fetch_array($querySumaNacidos)){
        $totalNacidos=$row[0];
        
    }
    //Total de lechones machos nacidos vivos
    $sqlSumaMachosNacidos = "SELECT SUM(nacidosVivosMachos) FROM partos WHERE fechaParto BETWEEN '$fechainicio' AND '$fechafin'";
    $querySumaMachosNacidos = mysql_query($sqlSumaMachosNacidos);
    $totalMachosNacidos;
    while($row=mysql_fetch_array($querySumaMachosNacidos)){
        $totalMachosNacidos=$row[0];
    }

    //Total de lechones machos nacidos muertos
    $sqlSumaMachosMuertos = "SELECT SUM(nacidosMuertosMachos) FROM partos WHERE fechaParto BETWEEN '$fechainicio' AND '$fechafin'";
    $querySumaMachosMuertos = mysql_query($sqlSumaMachosMuertos);
    $totalMachosMuertos;
    while($row=mysql_fetch_array($querySumaMachosMuertos)){
        $totalMachosMuertos=$row[0];
    }

    //Total de lechones hembra nacidos vivas
    $sqlSumaHembrasVivas = "SELECT SUM(nacidosVivosHembras) FROM partos WHERE fechaParto BETWEEN '$fechainicio' AND '$fechafin'";
    $querySumaHembrasVivas = mysql_query($sqlSumaHembrasVivas);
    $totalHembrasVivas;
    while($row=mysql_fetch_array($querySumaHembrasVivas)){
        $totalHembrasVivas=$row[0];
    }
	//Total de lechones hembra nacidos muertas
    $sqlSumaHembrasMuertas = "SELECT SUM(nacidosMuertosHembras) FROM partos WHERE fechaParto BETWEEN '$fechainicio' AND '$fechafin'";
    $querySumaHembrasMuertas = mysql_query($sqlSumaHembrasMuertas);
    $totalHembrasMuertas;
    while($row=mysql_fetch_array($querySumaHembrasMuertas)){
        $totalHembrasMuertas=$row[0];
    }
    //Total de promedio de peso al nacer
    $sqlTotalPromediosCamada = "SELECT SUM(pesoCamada) FROM partos WHERE fechaParto BETWEEN '$fechainicio' AND '$fechafin'";
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
    $sqlTotalPartos = $mysqli->query("SELECT totalNacidos FROM partos WHERE fechaParto BETWEEN '$fechainicio' AND '$fechafin'");
    $totalPartos = $sqlTotalPartos->num_rows;

    //Numero total de hembras registradas
    $sqlHembras = $mysqli ->query("SELECT idCerda FROM cerdas WHERE fechaParto BETWEEN '$fechainicio' AND '$fechafin'");
    $numHembras = $sqlHembras->num_rows;

    //Numero total de machos registrados
    $sqlMachos = $mysqli -> query("SELECT idCerdo FROM sementales WHERE fechaParto BETWEEN '$fechainicio' AND '$fechafin'");
    $numMachos = $sqlMachos->num_rows;

    header('Location: ../Destete.php?manual=manual&total='.$totalNacidos.'&totalmachosnacidos='.$totalMachosNacidos.'&totalmachosmuertos='.$totalMachosMuertos.'&totalhembrasvivas='.$totalHembrasVivas.'&totalhembrasmuertas='.$totalHembrasMuertas.'&totalpromediocamada='.$totalPromediosCamada.'&totalpartos='.$totalPartos.'');
    

?>