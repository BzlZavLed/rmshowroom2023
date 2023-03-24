<?php
include("db/conn2.php");

$actualizar = "UPDATE usuarios SET status ='1' WHERE idusuarios = '$ID'";
//$resultado = mysqli_query($conexion, $actualizar); 
$conn->query($actualizar);
if ($resultado){
   echo "se han actualizado los cambios correctamente";
}else{
   echo "no se han actualizado los datos _";
}
?>