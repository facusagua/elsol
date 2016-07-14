<?php 
include "Carrito.php";
$carrito = new Carrito();
$carrito->destroy();
header("location:productos.php");
?>