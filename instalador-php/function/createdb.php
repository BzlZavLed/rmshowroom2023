<?php
        

function createdb($namedb)
{
    // conexion a la base de datos
    include '../db/conexion/datos.php';


$conexion = new mysqli($dbhost, $dbUsername, $dbPassword);

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