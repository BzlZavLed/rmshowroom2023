<?php
session_start();
include("../../../db/conn2.php");


date_default_timezone_set('America/Monterrey');
$prodid = $_POST["prodid"];
$cant = $_POST["cant"];
$monto = $_POST["monto"];
$user = $_SESSION["nombre"];


$query = "UPDATE inventario SET existencia = ".$cant.",importe = ".$monto." WHERE ident = '".$prodid."'";
$exec = mysqli_query($conn3,$query);

$registro = "INSERT INTO registro (accion,user,fecha) VALUES ('Actualizacion de inventario de producto ".$prodid."','".$user."','".date("Y-m-d")."')";
$exec2 = mysqli_query($conn3,$registro);



if($exec){
	echo "Inventario actualizado";
}else{
	//echo $query;
	echo "Error".mysqli_error($conn3);
}


mysqli_close($conn3);



?>
