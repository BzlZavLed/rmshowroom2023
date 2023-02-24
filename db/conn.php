<?php 

include ($dir.'/vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable($dir.'/');
$dotenv->load();

$usuario  = $_ENV['USERDB'];
$password = $_ENV['PASSWORD'];
$servidor =$_ENV['HOST'];
$basededatos = $_ENV['DATABASE'];

$user = $_COOKIE['database'];
    

$conn = mysqli_connect($servidor, $usuario, $password, $basededatos);

$conn2 = mysqli_connect($servidor, $usuario, $password, $user);


$hostPDO = "mysql:host=$servidor;dbname=$basededatos;";
$miPDO = new PDO($hostPDO, $usuario, $password);

if(!$conn || !$conn2 || !$miPDO){
    echo "Connection failed!";
}

$conn3 =  mysqli_connect($servidor, $usuario, $password,$user);
if (!$conn3) {
     die('No pudo conectarse: ' . mysqli_error());
}

?>