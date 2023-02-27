<?php
session_start();
include("../../../db/conn2.php");
date_default_timezone_set('America/Monterrey');
$ident = $_POST["id"];

$user = $_SESSION["nombre"];
$query = "DELETE  FROM mensualidad WHERE id = '".$ident."'";
$exec = mysqli_query($conn3,$query);
$registro = "INSERT INTO registro (accion,user,fecha) VALUES ('Borrar cobro ".$ident."','".$user."','".date("Y-m-d")."')";
$exec2 = mysqli_query($conn3,$registro);
if($exec){
	echo "Cobro a marca borrado";
}else{
	//echo $query;
	echo "Error".mysqli_error($conn3);
}


mysqli_close($conn3);



?>