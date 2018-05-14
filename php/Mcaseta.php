<?php 

include "config.php";

$cod = $_POST['id'];
$desc = $_POST['des'];
$preciomenudeo = $_POST['precm'];
$preciomayoreo = $_POST['preciomayo'];
$departamento = $_POST['depart'];
$FechaCad = $_POST['fcad'];

$Editar = "UPDATE corrales SET Descripcion = '$desc',PrecioMenudeo='$preciomenudeo',PrecioMayoreo='$preciomayoreo',FechaCaducidad='$fcad',Departamento='$dep' WHERE id_Codigo = '$cod'";

$query = mysql_query($Editar) or die (mysql_error());

header("location: index.php");

?>