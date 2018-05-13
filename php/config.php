<?php
    require '/admin/admin.php';
$pass = $Password;
$user = $Usuario;
$server = 'localhost';
$db = $DataBase;

$conexion = mysql_connect($server,$user,$pass);
mysql_select_db($db);

?>