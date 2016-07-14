<?php
include "connect.php";
include "Carrito.php"; 
$desc = $_POST['nomProd'];
$rub = $_POST['rubProd'];
$cod = $_POST['codProd'];
$cant = $_POST['cantProd'];
$productos = "SELECT * FROM productos WHERE codigo = '$cod'";
$sqlProductos =  mysql_query($productos) or die(mysql_error());
$producto = mysql_fetch_assoc($sqlProductos);
$carrito = new Carrito();
  $articulo = array(
 "id" => $cod,
 "cantidad" => $cant,
 "rubro" => $rub,
 "precio" => 1,      
 "nombre" => $producto['descripcion']
 );
$carrito->add($articulo);
header("location:cotizacion.php");
?>