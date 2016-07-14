<?php 
include "Carrito.php";
$id = $_GET['id'];
$carrito = new Carrito();
$carrito->remove_producto($id);
header("location:cotizacion.php");
?>