<?php

    session_start();
    if (isset($_SESSION['usuario'])) {
        include "config.php";
        $idParto = $_POST['idParto'];
        $sqlEstadoVenta = "UPDATE partos SET estado='venta' WHERE idParto='$idParto'";
        $queryEstadoVenta = mysql_query($sqlEstadoVenta);

        header("Location: engorda.php");
            
    }

?>