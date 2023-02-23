<?php
require('../../../vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable('../../');
$dotenv->load();

$usuario  = $_ENV['USER'];
$password = $_ENV['PASSWORD'];
$servidor =$_ENV['HOST'];
$basededatos = $_['DATABASE'];

try {
        $conn = new PDO("mysql:host=$servidor;dbname=$basededatos", '$usuario', '$password', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );

} catch (PDOException $pe) {
   echo die("Could not connect to the database:" . $pe->getMessage());
}

?>