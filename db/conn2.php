<?php 
$dir = $_SERVER['DOCUMENT_ROOT'].'/carpeta sin título/versiones/rmshowroom2023';

include ($dir.'/vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable($dir.'/');
$dotenv->load();

$usuario  = $_ENV['USERDB'];
$password = $_ENV['PASSWORD'];
$servidor =$_ENV['HOST'];
$basededatos = $_ENV['DATABASE'];

$hostPDO = "mysql:host=$servidor;dbname=$basededatos;";
$miPDO = new PDO($hostPDO, $usuario, $password);


$user = $_COOKIE['database'];

$conn2 = mysqli_connect($servidor, $usuario, $password, $user);
$conn3 = mysqli_connect($servidor, $usuario, $password, $user);

 ?>