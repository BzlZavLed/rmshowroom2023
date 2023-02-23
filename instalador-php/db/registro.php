<?php
//incluir la conexion de base de datos
include 'conexion/conexion.php';
include '../function/createdb.php';
include '../function/insertTables.php';

date_default_timezone_set('America/Monterrey');
//
$fecha = date("Y-m-d h:m:s");
//recuperar los datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$nomEmpresa = $_POST['nomEmpresa'];
$password = $_POST['pass1'];
$password2 = $_POST['pass2'];
$puesto = "1";
$priv1 = "tienda";
$priv2 = "inventario";
$priv3 = "corte";
$priv4 = "proveedores";
$color1 = $_POST['color1'];
$color2 = $_POST['color2'];
$color3 = $_POST['color3'];
$img = "img11.jpg";
$plan = $_POST['plan'];

$email = '0';
$crearProucto = '0';
$entradaProducto = '0';
$proveedores = '0';
$reportes = '0';
$crearProductos = '0';
$crearCobros =  '0';
$Mail = '0';
$respaldo = '0';
$clientes = '0';
$promociones = '0';

//encriptar contraseña

echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $nomEmpresa;
echo "<br>";
echo $password;
echo "<br>";
echo $password2;
echo "<br>";
echo $puesto;
echo "<br>";
echo $priv1;
echo "<br>";
echo $priv2;
echo "<br>";
echo $priv3;
echo "<br>";
echo $priv4;
echo "<br>";
echo $fecha;
echo "<br>";
echo $color1;
echo "<br>";
echo $color2;
echo "<br>";
echo $color3;
echo "<br>";
echo $img;
echo "<br>";
echo $plan;
echo "<br>";

$clave = password_hash($password,PASSWORD_BCRYPT);

 echo 'Clave encriptada: '.$clave;
echo "<br>";
echo "<hr>";
 
//quitar espacios
$searchString = " ";
$replaceString = "";
$originalString = $nomEmpresa;
$namedb = str_replace($searchString, $replaceString, $originalString, $count);

$add = substr(md5(time()), 0, 3);

$nameDB_ok= $add.'_'.$namedb;
echo $nameDB_ok;
echo "<br>";  

//verificar que el correo no se repita en la base de datos


 


//header("Location:../../ok/");
?>
