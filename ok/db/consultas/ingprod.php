<?php
session_start();
$dir = $_SERVER['DOCUMENT_ROOT'].'/carpeta sin título/versiones/rmshowroom2023';
define("dir",  $dir);

include($dir."/db/conn.php");

$provee = $_POST["provee"];
$prodID = $_POST["prodID"];
$prod = $_POST["prod"];

$cant = $_POST["cant"];
$fecha = $_POST["fecha"];
$act = $_POST["act"];

$user = $_SESSION["nombre"];

$query = "INSERT INTO entradas (prodnombre,prodid,provid,ingreal,fecha,accion,usuario)VALUES ('".$prod."','".$prodID."','".$provee."',".$cant.",'".$fecha."',".$act.",'".$user."')";
$exec = mysqli_query($conn3,$query);


$queryi = "UPDATE inventario SET existencia = existencia + ".$cant.",importe = (SELECT precio FROM producto WHERE ident = '".$prodID."') * existencia WHERE ident = '".$prodID."'";
$execi = mysqli_query($conn3,$queryi);

$registro = "INSERT INTO registro (accion,user,fecha) VALUES ('Ingreso de producto a inventario ".$prodID." cantidad = ".$cant.",'".$user."','".date("Y-m-d")."')";
$exec2 = mysqli_query($conn3,$registro);
if($exec){
	echo "Ingreso registrado";
}else{
	echo $query.mysqli_error($conn3);
	//echo "Error".mysqli_error($conn);
}



mysqli_close($conn3);



?>

