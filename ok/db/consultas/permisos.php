<?php 
include("../../../db/conn.php");


    
    date_default_timezone_set('America/Monterrey');
    
    $id = $_POST["idPermisos"];
    $fecha = date("Y-m-d h:m:s");
    

if (!empty($_POST['caja'])) {
    $caja = 1;
}
elseif (empty($_POST['caja'])) {
    $caja = 0;
}
if (!empty($_POST['clientes'])) {
    $clientes = 1;
}
if (empty($_POST['clientes'])) {
    $clientes = 0;
}
if (!empty($_POST['crearCobros'])) {
    $crearCobros = 1;
}
if (empty($_POST['crearCobros'])) {
    $crearCobros = 0;
}
if (!empty($_POST['historialEmails'])) {
    $historialEmails = 1;
}
if (empty($_POST['historialEmails'])) {
    $historialEmails = 0;
}
if (!empty($_POST['entradaProductoCaja'])) {
    $entradaProductoCaja = 1;
}
if (empty($_POST['entradaProductoCaja'])) {
    $entradaProductoCaja = 0;
}
if (!empty($_POST['pagos'])) {
    $pagos = 1;
}
if (empty($_POST['pagos'])) {
    $pagos = 0;
}
if (!empty($_POST['crearProducto'])) {
    $crearProducto = 1;
}
if (empty($_POST['crearProducto'])) {
    $crearProducto = 0;
}
if (!empty($_POST['promociones'])) {
    $promociones = 1;
}
if (empty($_POST['promociones'])) {
    $promociones = 0;
}
if (!empty($_POST['proveedores'])) {
    $proveedores = 1;
}
if (empty($_POST['proveedores'])) {
    $proveedores = 0;
}
if (!empty($_POST['reportes'])) {
    $reportes = 1;
}
if (empty($_POST['reportes'])) {
    $reportes = 0;
}
if (!empty($_POST['respaldar'])) {
    $respaldar = 1;
}
if (empty($_POST['respaldar'])) {
    $respaldar = 0;
}
 
$upd = "UPDATE planes SET cajarosa = '$caja', clientes = '$clientes', cobrosmarca = '$crearCobros', historialrecibos = '$historialEmails', ingproducto = '$entradaProductoCaja', marcacobros = '$pagos', producto = '$crearProducto', promociones = '$promociones', proveedores = '$proveedores', reportes = '$reportes', respaldarData = '$respaldar'  WHERE idUsuario = '$id'";
$res = $conn->query($upd);
if ($res){
   echo "se han actualizado los cambios correctamente";
   $registro = "INSERT INTO registro (accion,user,fecha) VALUES ('Actualizacion de permisos de usuario con id ".$id."','".$user."','".date("Y-m-d")."')";
   $exec2 = mysqli_query($conn3,$registro);
}else{
   echo "no se han actualizado los datos _";
   $registro = "INSERT INTO registro (accion,user,fecha) VALUES ('Actualizacion de inventario de producto ".$id."','".date("Y-m-d")."')";
$exec2 = mysqli_query($conn3,$registro);
}
    mysqli_close($conn); 

   
?> 
