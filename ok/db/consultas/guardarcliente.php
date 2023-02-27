<?php
session_start();
include("../../../db/conn2.php");


include("tools.php");
date_default_timezone_set('America/Monterrey');
$nombre = $_POST["cliente"];
$email = $_POST["email"];
$user = $_SESSION["nombre"];

$exists = getDataRowLength($conn3,"SELECT * FROM clientes WHERE email = '".$email."'");

if ($exists > 0) {
	$query = "UPDATE clientes SET nombre = '$nombre' WHERE email = '$email'";
	$result = insertOrUpdate($conn3,$query,'Actualizar cliente '.$nombre,$user);
}else{
	$query = "INSERT INTO clientes (nombre,email)VALUES ('$nombre','$email')";
	$result = insertOrUpdate($conn3,$query,'Alta de cliente '.$nombre,$user);
}

echo $result;

mysqli_close($conn3);



?>