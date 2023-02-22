<?php

function createdb($namedb)
{
    // conexion a la base de datos
$dbhost = "127.0.0.1:3307";
$user = "benjamin";
$password = "*Zaab930802agodos93";
$conexion = new mysqli($dbhost, $user, $password);

if ($conexion->connect_error){
    die("conexion fallida: " .$conexion->connect_error);
}
//creacion de la base de datos
$sql = "CREATE DATABASE $namedb" ;
if($conexion->query($sql)===true){
echo "base de datos creada correctamente... ";
}else{
    die("error al crear base de datos");
}
   
}

?>