<?php
session_start();
include("../../../db/conn2.php");


date_default_timezone_set('America/Monterrey');
$cantidad = $_POST["key"];
$prod = $_POST["idprod"];

$query = "SELECT cantidadxpresi*".$cantidad." as totalsis,presentacioning FROM producto WHERE ident = '".$prod."'";
$exec = mysqli_query($conn3,$query);

$row = mysqli_fetch_array($exec);
$pres = $row["presentacioning"];


echo $row['totalsis'];




?>