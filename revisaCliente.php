<?php
error_reporting(E_ERROR);
    include 'connect.php';
    
    $cuit = $_POST['cuit'];
    $findUser = "select * from clientes where cuit = '$cuit'";
    $sqlUser = mysql_query($findUser) or die(mysql_error());
    $cantUser = mysql_num_rows($sqlUser);
    
    
        while($obj = mysql_fetch_object($sqlUser)) {
            $result[] = $obj;
        }

header("name-Type: application/x-json");
echo json_encode($result);    
?>