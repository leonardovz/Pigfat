<?php 
	session_start();
	require 'admin/admin.php';
	require 'php/funciones.php';
    date_default_timezone_set('America/Mexico_City');
if (isset($_SESSION['usuario'])) {
    $conexion = conexion($Paginacion,$Usuario,$Password);
    
    $tipo=$_POST['tipo'];
    switch ($tipo){
        case 'cerdas':
            $id=$_POST['cerdas'];
            //modifica tabla cerdas a estado muerta
            $sql="UPDATE cerdas SET estadoCerda = 'MUERTA' WHERE idCerda = $id;";
            $sentencia= $conexion->prepare($sql);
            $sentencia->execute();
            //registra el suceso
            $sql="INSERT INTO `sucesos` (idanimal, suceso, fecha, sexo) VALUES ( $id, 'muerte', '".date('Y-m-d')."', 'hembra');";
            $sentencia= $conexion->prepare($sql);
            $sentencia->execute();
            header("Location: mortalidad.php?val=1&id=$id");
            break;
        case 'cerdos':
            $id=$_POST['cerdos'];
                        //modifica tabla sementales a estado muerto
            $sql="UPDATE sementales SET estadoCerdo = 'MUERTO' WHERE idCerdo =$id;";
            $sentencia= $conexion->prepare($sql);
            $sentencia->execute();
            //registra el suceso
            $sql="INSERT INTO sucesos (idanimal, suceso, fecha, sexo) VALUES ( $id, 'muerte', '".date('Y-m-d')."', 'macho');";
            $sentencia= $conexion->prepare($sql);
            $sentencia->execute();
            header("Location: mortalidad.php?val=2&id=$id");
            break;
        case 'camadas':
            $id=$_POST['camadas'];
            //registra el suceso
            $sql="INSERT INTO `sucesos` (idanimal, suceso, fecha, sexo) VALUES ( $id, 'muerte', '".date('Y-m-d')."', 'macho');";
            $sentencia= $conexion->prepare($sql);
            $sentencia->execute();
            header("Location: mortalidad.php?val=3&id=$id");
            break;
    }

    
} else {
	header('Location: login.php');
}
?>