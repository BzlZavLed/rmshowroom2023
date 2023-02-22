<?php
include '../../vendor/autoload.php';
/*
$dotenv = Dotenv\Dotenv::createImmutable('../../');
$dotenv->load();

 $conn =  mysqli_connect($_ENV['DB_LOCAL_HOST'], $_ENV['DB_LOCAL_USER'],$_ENV['DB_LOCAL_PWD'],$_ENV['DB_LOCAL_DB']);
if (!$conn) {
     die('No pudo conectarse: ' . mysqli_error($err));
}

$_SESSION["nomDB"]
*/
$user = $_COOKIE['database'];

$conn =  mysqli_connect('127.0.0.1:3307', 'benjamin', '*Zaab930802agodos93', $user);
if (!$conn) {
     die('No pudo conectarse: ' . mysqli_error());
}

?>