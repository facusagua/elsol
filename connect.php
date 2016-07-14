<?php

$servidor = "localhost";
$usuario = "danilopez_sol";	
$pass = "Abc123";
$base_de_datos = "danilopez_sol";
/*
$servidor = "localhost";
$usuario = "root";	
$pass = "";
$base_de_datos = "elsol";*/

$conect = mysql_connect($servidor, $usuario, $pass) or die("Error al Seleccionar la BD");
mysql_select_db($base_de_datos, $conect) or die("Error al seleccionar la BD");

?>		