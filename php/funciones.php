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

function Venta($id, $conexion){

}



?>