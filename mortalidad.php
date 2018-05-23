<?php 
	session_start();
	require 'admin/admin.php';
	require 'php/funciones.php';
    date_default_timezone_set('America/Mexico_City');
    switch ($_GET['val']){
        case 1:
            echo '<script language="javascript">alert("Muerte de la cerda '.$_GET['id'].' registrada exitodamente");</script>';
            break;
        case 2:
            echo '<script language="javascript">alert("Muerte del cerdo '.$_GET['id'].' registrada exitodamente");</script>';
            break;
        case 3:
            echo '<script language="javascript">alert("Muerte del animal de la camada '.$_GET['id'].' registrada exitodamente");</script>';
            break;
        
    }
if (isset($_SESSION['usuario'])) {
    $conexion = conexion($Paginacion,$Usuario,$Password);
    //ids cerdas
	$sql="Select idCerda FROM cerdas WHERE estadoCerda <> 'MUERTA' AND estadoCerda <> 'VENTA'";
    $sentencia= $conexion->prepare($sql);
    $sentencia->execute();
    $idCerdas= $sentencia->fetchAll();
    //ids cerdos
    $sql="Select idCerdo FROM sementales WHERE estadoCerdo <> 'MUERTO' AND estadoCerdo <> 'VENTA'";
    $sentencia= $conexion->prepare($sql);
    $sentencia->execute();
    $idCerdos= $sentencia->fetchAll();
    //ids camadas
    $sql="Select idParto FROM partos WHERE estado <> 'VENTA'";
    $sentencia= $conexion->prepare($sql);
    $sentencia->execute();
    $idPartos= $sentencia->fetchAll();
    
    //Total muertos
    $sql = "SELECT fecha FROM sucesos";
    $sentencia= $conexion->prepare($sql);
    $sentencia->execute();
    $muertos= $sentencia->fetchAll();
    $totalMuertos=sizeof($muertos);
    
    //Mertos primeros 3 dias
    $sql = "SELECT sucesos.fecha FROM sucesos, partos WHERE partos.fechaParto >= DATE_SUB(sucesos.fecha, INTERVAL 3 DAY) AND sucesos.idanimal=partos.idParto AND sucesos.suceso = 'MUERTE'";
    $sentencia= $conexion->prepare($sql);
    $sentencia->execute();
    $tresDias= $sentencia->fetchAll();
    $totalTresDias=sizeof($tresDias);
    //primeras 3 semanas
    $sql = "SELECT sucesos.fecha FROM sucesos, partos WHERE partos.fechaParto >= DATE_SUB(sucesos.fecha, INTERVAL 21 DAY) AND partos.fechaParto < DATE_SUB(sucesos.fecha, INTERVAL 3 DAY) AND sucesos.idanimal=partos.idParto AND sucesos.suceso = 'MUERTE'";
    $sentencia= $conexion->prepare($sql);
    $sentencia->execute();
    $tresSemanas= $sentencia->fetchAll();
    $totalTresSemanas=sizeof($tresSemanas);
    //desarrrollo y engorda 
    $sql = "SELECT sucesos.fecha FROM sucesos, partos WHERE partos.fechaParto >= DATE_SUB(sucesos.fecha, INTERVAL 21 DAY) AND partos.fechaParto < DATE_SUB(sucesos.fecha, INTERVAL 3 DAY) AND sucesos.idanimal=partos.idParto AND sucesos.suceso = 'MUERTE'";
    $sentencia= $conexion->prepare($sql);
    $sentencia->execute();
    $desarrollo= $sentencia->fetchAll();
    $totalDesarrollo=sizeof($desarrollo);
    //hembras reproductoras
    $sql = "SELECT sucesos.fecha FROM sucesos, cerdas WHERE sucesos.idanimal=cerdas.idCerda AND sucesos.suceso = 'MUERTE'";
    $sentencia= $conexion->prepare($sql);
    $sentencia->execute();
    $hembras= $sentencia->fetchAll();
    $totalHembras=sizeof($hembras);
    //machos reproductores
    $sql = "SELECT sucesos.fecha FROM sucesos, sementales WHERE sucesos.idanimal=sementales.idCerdo AND sucesos.suceso = 'MUERTE'";
    $sentencia= $conexion->prepare($sql);
    $sentencia->execute();
    $machos= $sentencia->fetchAll();
    $totalMachos=sizeof($machos); 
    
    //para graficar
    $b1=$totalMuertos;
    $b2=$totalTresDias;
    $b3=$totalTresSemanas;
    $b4=$totalHembras;
    $b5=$totalMachos;
    
    
    //En caso de requerir un informe manual:
    
    if(isset($_POST['fechaInicio'])){
        $inicio=$_POST['fechaInicio'];
        if($_POST['fechaFin']!=null){
            $fin=$_POST['fechaFin'];
            
        }else $fin=date('Y-m-d');
        //consultas:
            //Total muertos
        $sql = "SELECT fecha FROM sucesos WHERE fecha BETWEEN '$inicio' AND '$fin'";
        print_r($sql);
        $sentencia= $conexion->prepare($sql);
        $sentencia->execute();
        $muertos2= $sentencia->fetchAll();
        $totalMuertos2=sizeof($muertos2);
        //Mertos primeros 3 dias
        $sql = "SELECT sucesos.fecha FROM sucesos, partos WHERE partos.fechaParto >= DATE_SUB(sucesos.fecha, INTERVAL 3 DAY) AND sucesos.idanimal=partos.idParto AND sucesos.suceso = 'MUERTE' AND sucesos.fecha BETWEEN '$inicio' AND '$fin'";
        $sentencia= $conexion->prepare($sql);
        $sentencia->execute();
        $tresDias2= $sentencia->fetchAll();
        $totalTresDias2=sizeof($tresDias2);
        //primeras 3 semanas
        $sql = "SELECT sucesos.fecha FROM sucesos, partos WHERE partos.fechaParto >= DATE_SUB(sucesos.fecha, INTERVAL 21 DAY) AND partos.fechaParto < DATE_SUB(sucesos.fecha, INTERVAL 3 DAY) AND sucesos.idanimal=partos.idParto AND sucesos.suceso = 'MUERTE' AND sucesos.fecha BETWEEN '$inicio' AND '$fin'";
        $sentencia= $conexion->prepare($sql);
        $sentencia->execute();
        $tresSemanas2= $sentencia->fetchAll();
        $totalTresSemanas2=sizeof($tresSemanas2);
        //desarrrollo y engorda 
        $sql = "SELECT sucesos.fecha FROM sucesos, partos WHERE partos.fechaParto >= DATE_SUB(sucesos.fecha, INTERVAL 21 DAY) AND partos.fechaParto < DATE_SUB(sucesos.fecha, INTERVAL 3 DAY) AND sucesos.idanimal=partos.idParto AND sucesos.suceso = 'MUERTE' AND sucesos.fecha BETWEEN '$inicio' AND '$fin'";
        $sentencia= $conexion->prepare($sql);
        $sentencia->execute();
        $desarrollo2= $sentencia->fetchAll();
        $totalDesarrollo2=sizeof($desarrollo2);
        //hembras reproductoras
        $sql = "SELECT sucesos.fecha FROM sucesos, cerdas WHERE sucesos.idanimal=cerdas.idCerda AND sucesos.suceso = 'MUERTE' AND sucesos.fecha BETWEEN '$inicio' AND '$fin'";
        $sentencia= $conexion->prepare($sql);
        $sentencia->execute();
        $hembras2= $sentencia->fetchAll();
        $totalHembras2=sizeof($hembras2);
        //machos reproductores
        $sql = "SELECT sucesos.fecha FROM sucesos, sementales WHERE sucesos.idanimal=sementales.idCerdo AND sucesos.suceso = 'MUERTE' AND sucesos.fecha BETWEEN '$inicio' AND '$fin'";
        $sentencia= $conexion->prepare($sql);
        $sentencia->execute();
        $machos2= $sentencia->fetchAll();
        $totalMachos2=sizeof($machos2); 
        
        //para graficar
        $b1=$totalMuertos2;
        $b2=$totalTresDias2;
        $b3=$totalTresSemanas2;
        $b4=$totalHembras2;
        $b5=$totalMachos2;
    }
    
    
	require 'views/mortalidad.view.php';
    
} else {
	header('Location: login.php');
}
?>