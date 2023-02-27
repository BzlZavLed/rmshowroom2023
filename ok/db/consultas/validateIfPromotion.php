<?php

use LDAP\Result;

session_start();
$dir = $_SERVER['DOCUMENT_ROOT'].'/carpeta sin título/versiones/rmshowroom2023';
define("dir",  $dir);

include($dir."/db/conn.php");

include("tools.php");;
date_default_timezone_set('America/Monterrey');

$product_code = $_POST['productId'];

$query = "SELECT * FROM promociones WHERE producto = '".$product_code."' ORDER BY id DESC LIMIT 1";

$result = getData($conn3,$query);

if(!is_null($result)){
    if (count($result) > 0 ) {
        echo json_encode(array("resp" => $result,"status" => "success"));
    }
}else{
    echo json_encode(array("resp" => "Sin promocion","status" => "error"));
}
