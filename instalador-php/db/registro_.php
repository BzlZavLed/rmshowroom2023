<?php
//incluir la conexion de base de datos
include 'conexion/conexion.php';
include 'conexion/datos.php';
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

//Fecha Fin Plan


$date = date("d-m-Y");
//Incrementando 2 dias
$fechafinPlan = strtotime($date."+ 30 days");
$fechafinPlanOK = date("d-m-Y",$fechafinPlan);


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
echo $fechafinPlanOK;
echo "<br>";
echo $fechafinPlan;
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
echo $namedb;
echo "<br>";
//insertar en la base de datos
$miInsert = $miPDO->prepare('INSERT INTO usuarios (email,password,puesto,nombre,nomEmpresa,nomDB,priv1,priv2,priv3,priv4,color1,color2,color3,logo,idplan,fechaCreacion) VALUES (:email, :clave, :puesto, :nombre, :nomEmpresa, :priv1, :priv2, :priv3, :priv4, :color1, :color2, :color3, :logo, :plan, :fecha)');
    // Ejecuta INSERT con los datos
    $miInsert->execute(
        array(
            'email' => $email,
            'clave' => $clave,
            'puesto' => $puesto,
            'nombre' => $name,
            'nomEmpresa' => $nomEmpresa,
            'nomDB' => $namedb,
            'priv1'=> $priv1,
            'priv2'=> $priv2,
            'priv3'=> $priv3,
            'priv4'=> $priv4,
            'color1'=> $color1,
            'color2'=> $color2,
            'color3'=> $color3,
            'logo'=> $img,
            'plan'=> $plan,
            'fecha' =>$fecha
        )
    );
// escribir el log.
    $accion = "Creación de usuario:.$name.";
$miInsert2 = $miPDO->prepare('INSERT INTO registro (accion, user, fecha) VALUES (:accion, :user, :fecha)');
    // Ejecuta INSERT con los datos
    $miInsert2->execute(
        array(
            'accion' => $accion,
            'user' => $email,
            'fecha' => $fecha
        )
    );
  

//crear base de datos
createdb($namedb);
insertTables($namedb);

header("Location:../../ok/");
?>
