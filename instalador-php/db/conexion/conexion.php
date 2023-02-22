<?php
// Variables
$hostDB = '127.0.0.1:3307';
$nombreDB = 'rmshowroom2023';
$usuarioDB = 'benjamin';
$contrasenyaDB = '*Zaab930802agodos93';
// Conecta con base de datos
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
// Prepara SELECT
$miConsulta = $miPDO->prepare('SELECT * FROM usuarios;');
// Ejecuta consulta
$miConsulta->execute();
?>