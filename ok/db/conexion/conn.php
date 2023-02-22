<?php
define('USER', 'benjamin');
define('PASSWORD', '*Zaab930802agodos93');
define('HOST', '127.0.0.1:3306');
define('DATABASE', 'rmshowroom2023');
 
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>