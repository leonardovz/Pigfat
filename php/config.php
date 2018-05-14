<?php
$pass = 'data1122';
$user = 'root';
$server = 'localhost';
$db = 'pfat';

$conexion = mysql_connect($server,$user,$pass);
mysql_select_db($db);

?>