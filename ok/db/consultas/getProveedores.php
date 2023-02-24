<?php

session_start();
$dir = $_SERVER['DOCUMENT_ROOT'].'/carpeta sin título/versiones/rmshowroom2023';
define("dir",  $dir);

include ($dir.'/db/conn.php');	


$query = "SELECT ident,nombre,importe FROM proveedores";

$exec = mysqli_query($conn3,$query);
$cad = "";
while($row = mysqli_fetch_array($exec)){
	$ident = $row["ident"];
	$nombre = $row["nombre"];
	$importe = $row["importe"];
	$cad = $ident."|".$nombre."|".$importe."||".$cad;



}
echo $cad;

?>