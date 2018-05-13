<?php
$pass = 'data1122';
$user = 'root';
$server = 'localhost';
$db = 'pfat';
echo "entro";

$conexion = mysql_connect($server,$user,$pass);
mysql_select_db($db);

?>