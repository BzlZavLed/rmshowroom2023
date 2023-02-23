<?php
require('../../../vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable('../../../');
$dotenv->load();

$usuario  = $_ENV['USERDB'];
$password = $_ENV['PASSWORD'];
$servidor =$_ENV['HOST'];
$basededatos = $_ENV['DATABASE'];

echo $usuario;
echo '<br>';

echo $password;
echo '<br>';

echo $servidor;
echo '<br>';

echo $basededatos;
echo '<br>';
?>
