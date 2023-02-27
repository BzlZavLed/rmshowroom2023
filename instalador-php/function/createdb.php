<?php

function createdb($namedb)
{
    $dir = $_SERVER['DOCUMENT_ROOT'] . '/rmshowroom2023';
    include('../../vendor/autoload.php');
    $dotenv = Dotenv\Dotenv::createImmutable($dir . '/');
    $dotenv->load();
    //variables de conexion
    $usuario = $_ENV['USERDB'];
    $password = $_ENV['PASSWORD'];
    $servidor = $_ENV['HOST'];
    $basededatos = $_ENV['DATABASE'];

    $conexion = new mysqli($servidor, $usuario, $password);

    if ($conexion->connect_error) {
        die("conexion fallida: " . $conexion->connect_error);
    }
    //creacion de la base de datos
    $sql = "CREATE DATABASE $namedb";
    if ($conexion->query($sql) === true) {
        echo "base de datos creada correctamente... ";
    } else {
        die("error al crear base de datos");
    }

}

?>