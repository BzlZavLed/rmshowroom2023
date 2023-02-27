<?php
session_start();
include("../../../db/conn2.php");

date_default_timezone_set('America/Monterrey');
$ident = $_POST["ident"];
$nombre = $_POST["nombre"];
$fecha = $_POST["fecha"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$bancaria = $_POST["bancaria"];
$ciudad = $_POST["ciudad"];
$user = $_SESSION["nombre"];
$sucursal = $_POST["sucursal"];
$mensualidad = $_POST["mensualidad"];
$query = "INSERT INTO proveedores (ident,nombre,fecha,tel,email,bancaria,ciudad,importe,sucursal)VALUES ('".$ident."','".$nombre."','".$fecha."','".$tel."','".$email."','".$bancaria."','".$ciudad."',".$mensualidad.",'".$sucursal."')";
$exec = mysqli_query($conn3,$query);




if($exec){
	$registro = "INSERT INTO registro (accion,user,fecha) VALUES ('Creación de proveedor".$nombre."','".$user."','".date("Y-m-d")."')";
$exec2 = mysqli_query($conn3,$registro);
	echo "Proveedor creado";

}else{

	echo $query;
	echo "Error".mysqli_error($conn3);
	$registro = "INSERT INTO registro (accion,user,fecha) VALUES ('fallo la Creación de proveedor".$nombre."','".$user."','".date("Y-m-d")."')";
$exec2 = mysqli_query($conn3,$registro);
}

mysqli_close($conn3);



?>


