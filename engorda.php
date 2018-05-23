<?php

session_start();

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

    //Total de lechones hembra nacidos vivos
    $sqlSumaHembrasEngorda = "SELECT SUM(nacidosVivosHembras) FROM partos WHERE estado='engorda'";
    $querySumaHembraEngorda = mysql_query($sqlSumaHembrasEngorda);
    $totalHembraEngorda;
    while($row=mysql_fetch_array($querySumaHembraEngorda)){
        $totalHembraEngorda=$row[0];
    }

    //Total de lechones hembra vendidos
    $sqlSumaHembrasVenta = "SELECT SUM(nacidosVivosHembras) FROM partos WHERE estado='venta'";
    $querySumaHembraVenta = mysql_query($sqlSumaHembrasVenta);
    $totalHembraVenta;
    while($row=mysql_fetch_array($querySumaHembraVenta)){
        $totalHembraVenta=$row[0];
    }

    //Total de lechones macho vendidos
    $sqlSumaMachoVenta = "SELECT SUM(nacidosVivosMachos) FROM partos WHERE estado='venta'";
    $querySumaMachoVenta = mysql_query($sqlSumaMachoVenta);
    $totalMachosVenta;
    while($row=mysql_fetch_array($querySumaMachoVenta)){
        $totalMachosVenta=$row[0];
    }

    //Total de kg a la venta
    $sqlKgTotales = 'SELECT SUM(kgTotales) FROM ventas';
    $querykgTotales = mysql_query($sqlKgTotales);
    $kgTotales;
    while($row=mysql_fetch_array($querykgTotales)){
        $kgTotales=$row[0];
    }

    //Total de kg a la venta
    $sqlNumCerdos = 'SELECT SUM(numCerdos) FROM ventas';
    $queryNumCerdos = mysql_query($sqlNumCerdos);
    $numCerdos;
    while($row=mysql_fetch_array($queryNumCerdos)){
        $numCerdos=$row[0];
    }

    $peso = $kgTotales / $numCerdos;

    require 'views/engorda.view.php';
}

?>