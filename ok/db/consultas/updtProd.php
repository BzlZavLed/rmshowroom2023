<?php
session_start();
include("../../../db/conn2.php");

date_default_timezone_set('America/Monterrey');
$nombre = $_POST["nombre"];
$descri = $_POST["descri"];
$fecha = $_POST["fecha"];
$provee = $_POST["provee"];
$cantIni = $_POST["cantIni"];
$ident = $_POST["ident"];
$user = $_SESSION["nombre"];
$precio = $_POST["precio"];

$query = "UPDATE producto SET nombre = '".$nombre."',descripcion = '".$descri."',fecha ='".$fecha."',proveedorid='".$provee."',usuario='".$user."',precio =".$precio." WHERE ident = ".$ident;
$exec = mysqli_query($conn3,$query);

$updtinv = "UPDATE inventario SET provee = '".$provee."', importe = existencia * $precio WHERE ident = '".$ident."'";
$exec1 = mysqli_query($conn3,$updtinv);


$registro = "INSERT INTO registro (accion,user,fecha) VALUES ('Actualizar producto".$nombre."','".$user."','".date("Y-m-d")."')";
$exec2 = mysqli_query($conn3,$registro);

if($exec && $exec1){
	echo "Producto actualizado";
}else{
	echo $query.mysqli_error($conn3);
	//echo "Error".mysqli_error($conn);
}


mysqli_close($conn3);



?>

