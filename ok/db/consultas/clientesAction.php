<?php
include("../../../db/conn2.php");


include("tools.php");

 
$action = (isset($_POST['action'])) ? $_POST['action'] : 'update';
 
if($action == 'delete'){
   $query = "
    DELETE FROM clientes 
    WHERE id = '".$_POST["pk"]."'";
}else{
     $query = "
    UPDATE clientes 
    SET ".$_POST["name"]." = '".$_POST["value"]."' 
    WHERE id = '".$_POST["pk"]."'
    ";
}


$conn3->query($query);