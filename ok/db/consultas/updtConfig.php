<?php
session_start();
include("../conexiones/conexion2.php");
date_default_timezone_set('America/Monterrey');
$id = $_POST["id"];
$nomEmpresa = $_POST["nomEmpresa"];
$color1 = $_POST["color1"];
$color2 = $_POST["color2"];
$color3 = $_POST["color3"];
$archivo = $_POST["archivo"];
$logoActual = $_SESSION["logoActual"];

$query = "UPDATE usuarios SET id = '".$id."',nomEmpresa = '".$nomEmpresa."',color1 ='".$color1."',color2='".$color2."',color3='".$color3."',archivo ="'.$archivo.'",logoActual ="'.$logo.'" WHERE id = ".$id;
$exec = mysqli_query($conn,$query);

$registro = "INSERT INTO registro (accion,user,fecha) VALUES ('Actualizar configuracion".$nomEmpresa."','".$color1."','".date("Y-m-d")."')";
$exec2 = mysqli_query($conn,$registro);

if($exec && $exec1){
	echo "Producto actualizado";
}else{
	echo $query.mysqli_error($conn);
	//echo "Error".mysqli_error($conn);
}


mysqli_close($conn);



?>

