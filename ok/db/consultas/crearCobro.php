<?php
session_start();
$dir = $_SERVER['DOCUMENT_ROOT'].'/carpeta sin título/versiones/rmshowroom2023';
define("dir",  $dir);

include($dir."/db/conn.php");

date_default_timezone_set('America/Monterrey');

$nombre = $_POST["nombre"];
$idmarca = $_POST["idmarca"];
$mes = $_POST["mes"];
$fecha = $_POST["fecha"];
$importe = $_POST["importe"];
$user = $_SESSION["nombre"];

$query = "INSERT INTO mensualidad (marca,nombre_marca,mes_cobro,fecha,importe,pagado) VALUES ('".$idmarca."','".$nombre."','".$mes."','".$fecha."',".$importe.",3)";
$exec = mysqli_query($conn3,$query);

$registro = "INSERT INTO registro (accion,user,fecha) VALUES ('Cobro a marca ".$nombre."','".$user."','".date("Y-m-d")."')";
$exec2 = mysqli_query($conn3,$registro);
if($exec){
	echo "Cobro creado";
}else{
	echo mysqli_error($conn3);;
	//echo "Error".mysqli_error($conn);
}


mysqli_close($conn3);



?>