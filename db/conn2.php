<?php 
$dir = $_SERVER['DOCUMENT_ROOT'].'/rmshowroom2023';

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

$conn = mysqli_connect($servidor, $usuario, $password, $user);

function connectCustom($db){
    $conn = mysqli_connect($_ENV['HOST'], $_ENV['USERDB'], $_ENV['PASSWORD'], $db);
    return $conn; 
}

?>