<?php
	
function conexion($database, $usuario,$pass){
	try {
		$conexion = new PDO('mysql:host=localhost;dbname='. $database, $usuario, $pass);
		return $conexion;
	} catch (PDOException $e) {
		echo "ERROR " . $e->getMessage();
		die();
		return false;
	}
}
function obtener_nombre($nombre, $conexion){
    $sentencia = $conexion->prepare("SELECT * FROM usuarios WHERE Usuario='$nombre';");
    $sentencia->execute();
    if ($fila = $sentencia->fetch()) {
        return $fila;
    }else return "null";
}
function guardar_usuario($usuario, $pass ,$nivel, $conexion){
    $sentencia = $conexion->prepare("SELECT id FROM usuarios WHERE usuario =".$usuario);
    $sentencia->execute();
    if (!$sentencia->fetch()) {       
        $query="INSERT INTO `usuarios`(`usuario`, `pass`, `tipoUser`) VALUES ('$usuario','$pass','$nivel');";
        $sentencia = $conexion->prepare($query);
        $sentencia -> execute();  
        echo '<script language="javascript">alert("Usuario: '.$usuario.' registrado exitosamente");</script>';

    }else 
    echo '<script language="javascript">alert("El usuario: '.$usuario.' ya existe");</script>';
}
?>