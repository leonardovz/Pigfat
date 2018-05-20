<?php session_start();
    require '../php/config.php';
if (isset($_SESSION['usuario'])) {
	require '../php/funciones.php';
    $idBorrar= $_GET['idcorral'];
    echo $Tablaname;
    echo $idBorrar;
    try {
        $borrar = "DELETE FROM  ventas WHERE idVenta = $idBorrar;";
        echo $borrar;
        $query = mysql_query($borrar) or die (mysql_error());
        header('Location: ../index.php');
    } catch (PDOException $e) {
        echo $Tablaname;
        echo "ERROR " . $e->getMessage();
        die();
    }

} else {
	header('Location: ../login.php');
}

?>