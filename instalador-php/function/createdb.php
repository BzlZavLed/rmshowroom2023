<?php

function createdb($nameDB_ok)
{ 
    include('../../db/conn.php');

    $conexion = new mysqli($servidor, $usuario, $password);

    if ($conexion->connect_error) {
        die("conexion fallida: " . $conexion->connect_error);
    }
    //creacion de la base de datos
    $sql = "CREATE DATABASE $nameDB_ok";
    if ($conexion->query($sql) === true) {
        echo "base de datos creada correctamente... ";
    } else {
        die("error al crear base de datos");
    }
}

?>