<?php
// Variables
$hostDB = '127.0.0.1:3306';
$nombreDB = 'rosa';
$usuarioDB = 'root';
$password = 'Lp098xdr';
// Conecta con base de datos
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $password);
// Prepara SELECT
$miConsulta = $miPDO->prepare('SELECT * FROM usuarios;');
// Ejecuta consulta
$miConsulta->execute();




?>