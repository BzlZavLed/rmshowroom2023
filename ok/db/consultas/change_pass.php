<?php 
date_default_timezone_set('America/Monterrey');

//  incluir la conexion
include("../../../db/conn.php");
$id = $_POST['id'];
$pass = $_POST['pass1'];
$clave = password_hash($pass, PASSWORD_BCRYPT);
 

$query = "UPDATE usuarios set password= '$clave' WHERE idusuarios= $id";
$conn->query($query);

header("Location: ../../Vistas/Principal/index.html?message=success_password");

?>