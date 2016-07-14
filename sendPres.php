<?php 
error_reporting(E_ERROR);
include "connect.php";
$cuit = $_POST['cuit'];
$nomyap = $_POST['nomyap'];
$empresa = $_POST['empresa'];
$localidad = $_POST['localidad'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$queryCuit = "SELECT * FROM clientes WHERE cuit = '$cuit'";
$sqlProductos =  mysql_query($queryCuit) or die(mysql_error()); 
echo $cantUser = mysql_num_rows($sqlProductos);
if($cantUser == 0){
    $productos = "INSERT INTO clientes (cuit,nomyap,empresa,localidad,tel,email) VALUES ('$cuit','$nomyap','$empresa','$localidad','$telefono','$email')";
$sqlProductos =  mysql_query($productos) or die(mysql_error());    
}
include "Carrito.php";
$carrito = new Carrito();
$carrito->destroy();
header("location:cotizacionok.php");
?>