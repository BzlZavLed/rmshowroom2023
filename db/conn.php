<?php 
 $dir = $_SERVER['DOCUMENT_ROOT'].'/rmshowroom2023';

 include ('../../vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable($dir.'/');
$dotenv->load();

$usuario  = $_ENV['USERDB'];
$password = $_ENV['PASSWORD'];
$servidor =$_ENV['HOST'];
$basededatos = $_ENV['DATABASE'];



    

$conn = mysqli_connect($servidor, $usuario, $password, $basededatos);

$conn3 = mysqli_connect($servidor, $usuario, $password, $basededatos);



if(!$conn){
    echo "Connection failed!";
}



?>