<?php session_start();
    require '../php/config.php';
	require '../php/funciones.php';
if (isset($_SESSION['usuario'])) {
    $idBorrar= $_POST['id'];
    echo $idBorrar;
    echo $Tablaname;
    echo $idBorrar;
    try {
        $borrar = "DELETE FROM  Medicamentos WHERE idMedicamento = '$idBorrar';";
        echo $borrar;
        $query = mysql_query($borrar) or die (mysql_error());
        header('Location: ../Medicamentos_y_vacunas.php');
    } catch (PDOException $e) {
        echo $Tablaname;
        echo "ERROR " . $e->getMessage();
        die();
    }

} else {
	header('Location: ../Medicamentos_y_vacunas.php');
}
