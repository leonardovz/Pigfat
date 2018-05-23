<?php session_start();
    require '../php/config.php';
	// require '../php/funciones.php';
if (isset($_SESSION['usuario'])) {
    $UsuarioLog = $_SESSION['usuario'];
    $id= $_POST['idUser'];
    echo $id;
    try {
        $borrar = "DELETE FROM  usuarios WHERE id = '$id' AND usuario != '$UsuarioLog';";
        echo $borrar;
         $query = mysql_query($borrar) or die (mysql_error());
        header('Location: ../Perfil.php');
    } catch (PDOException $e) {
        echo $Tablaname;
        echo "ERROR " . $e->getMessage();
        die();
    }

} else {
	header('Location: ../Perfil.php');
}
