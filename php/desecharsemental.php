<?php

    include "config.php";
    $idCerdo = $_POST['idCerdo'];
    
    $sqlDesecho = "UPDATE sementales SET estadoCerdo='desecho' WHERE idCerdo='$idCerdo'";
    $queryDesecho = mysql_query($sqlDesecho) or die (mysql_error());

    header("Location: ../sementales.php");
    
?>