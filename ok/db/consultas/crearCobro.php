<?php
session_start();
include("../conexiones/conexion2.php");
date_default_timezone_set('America/Monterrey');

$nombre = $_POST["nombre"];
$idmarca = $_POST["idmarca"];
$mes = $_POST["mes"];
$fecha = $_POST["fecha"];
$importe = $_POST["importe"];
$user = $_SESSION["nombre"];

$query = "INSERT INTO mensualidad (marca,nombre_marca,mes_cobro,fecha,importe,pagado) VALUES ('".$idmarca."','".$nombre."','".$mes."','".$fecha."',".$importe.",3)";
$exec = mysqli_query($conn,$query);

$registro = "INSERT INTO registro (accion,user,fecha) VALUES ('Cobro a marca ".$nombre."','".$user."','".date("Y-m-d")."')";
$exec2 = mysqli_query($conn,$registro);
if($exec){
	echo "Cobro creado";
}else{
	echo mysqli_error($conn);;
	//echo "Error".mysqli_error($conn);
}


mysqli_close($conn);



?>