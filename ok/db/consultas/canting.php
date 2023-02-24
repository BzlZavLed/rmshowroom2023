<?php
session_start();
$dir = $_SERVER['DOCUMENT_ROOT'].'/carpeta sin título/versiones/rmshowroom2023';
define("dir",  $dir);

include($dir."/db/conn.php");

date_default_timezone_set('America/Monterrey');
$cantidad = $_POST["key"];
$prod = $_POST["idprod"];

$query = "SELECT cantidadxpresi*".$cantidad." as totalsis,presentacioning FROM producto WHERE ident = '".$prod."'";
$exec = mysqli_query($conn3,$query);

$row = mysqli_fetch_array($exec);
$pres = $row["presentacioning"];


echo $row['totalsis'];




?>