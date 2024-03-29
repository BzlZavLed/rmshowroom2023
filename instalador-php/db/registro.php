<?php
//incluir la conexion de base de datos

include("../../db/conn.php");

include '../function/createdb.php';
include '../function/insertTables.php';
include '../function/validacionDatos.php';

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

$crearProucto = '0';
$entradaProducto = '0';
$proveedores = '0';
$reportes = '0';
$crearProductos = '0';
$crearCobros = '0';
$Mail = '0';
$respaldo = '0';
$clientes = '0';
$promociones = '0';
$admin = '0';
$status = '0';


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
echo $password;
echo "<br>";
$clave = password_hash($password, PASSWORD_BCRYPT);

echo 'Clave encriptada: ' . $clave;
echo "<br>";
echo "<hr>";

//quitar espacios
$searchString = " ";
$replaceString = "";
$originalString = $nomEmpresa;
$namedb = str_replace($searchString, $replaceString, $originalString, $count);

$add = substr(md5(time()), 0, 3);

$nameDB_ok = $add . '_' . $namedb;
echo $nameDB_ok;
echo "<br>";

//verificar que el correo no se repita en la base de datos



//insertar en la base de datos
$miInsert = $miPDO->prepare('INSERT INTO usuarios (email,password,puesto,nombre,nomEmpresa,nomDB,priv1,priv2,priv3,priv4,color1,color2,color3,logo,idplan,fechaCreacion,status) VALUES (:email, :clave, :puesto, :nombre, :nomEmpresa, :nomDB, :priv1, :priv2, :priv3, :priv4, :color1, :color2, :color3, :logo, :plan, :fecha, :status)');
// Ejecuta INSERT con los datos
$miInsert->execute(
    array(
        'email' => $email,
        'clave' => $clave,
        'puesto' => $puesto,
        'nombre' => $name,
        'nomEmpresa' => $nomEmpresa,
        'nomDB' => $nameDB_ok,
        'priv1' => $priv1,
        'priv2' => $priv2,
        'priv3' => $priv3,
        'priv4' => $priv4,
        'color1' => $color1,
        'color2' => $color2,
        'color3' => $color3,
        'logo' => $img,
        'plan' => $plan,
        'fecha' => $fecha,
        'status' => $status
    )
);
$last_id = $miPDO->lastInsertId();

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
//hacer un select a la base de datos recuperar el ultimo registro 

//arreglo de arreglos 

// ingresar datos del plan

$date = date("d-m-Y");
echo $date;
echo "<br>";
//Incrementando 30 dias
$mod_date = strtotime($date . "+ 30 days");
$fechacorte = date("d-m-Y", $mod_date);
//accesos 
$accesos = [
    1 => [
        'idPlan' => $plan,
        'idUsuario' => $last_id,
        'admin' => $admin,
        'cajarosa' => '1',
        'clientes' => '0',
        'cobrosmarca' => '0',
        'historialrecibos' => '1',
        'ingproducto' => '0',
        'marcacobros' => '0',
        'producto' => '1',
        'promociones' => '0',
        'proveedores' => '0',
        'respaldarData' => '0',
        'fechaInicio' => $fecha,
        'fechaCorte' => $fechacorte,
        'pago' => '300'
    ],
    2 => [
        'idPlan' => $plan,
        'idUsuario' => $last_id,
        'admin' => $admin,
        'cajarosa' => '1',
        'clientes' => '1',
        'cobrosmarca' => '1',
        'historialrecibos' => '1',
        'ingproducto' => '0',
        'marcacobros' => '1',
        'producto' => '1',
        'promociones' => '1',
        'proveedores' => '0',
        'respaldarData' => '0',
        'fechaInicio' => $fecha,
        'fechaCorte' => $fechacorte,
        'pago' => '300'
    ],
    3 => [
        'idPlan' => $plan,
        'idUsuario' => $last_id,
        'admin' => $admin,
        'cajarosa' => '1',
        'clientes' => '1',
        'cobrosmarca' => '1',
        'historialrecibos' => '1',
        'ingproducto' => '1',
        'marcacobros' => '1',
        'producto' => '1',
        'promociones' => '1',
        'proveedores' => '1',
        'respaldarData' => '1',
        'fechaInicio' => $fecha,
        'fechaCorte' => $fechacorte,
        'pago' => '300'
    ]
];





$miInsert3 = $miPDO->prepare('INSERT INTO planes (idplanes, idUsuario, admin, cajarosa, clientes, cobrosmarca, historialrecibos, ingproducto, marcacobros, producto, promociones, proveedores, respaldarData, fechaInicio, fechaCorte, pago) 
                                          VALUES (:idPlan, :idUsuario, :admin, :cajarosa, :clientes, :cobrosmarca, :historialrecibos, :ingproducto, :marcacobros, :producto, :promociones, :proveedores, :respaldarData,  :fechaInicio, :fechaCorte, :pago)');
// Ejecuta INSERT con los datos
$miInsert3->execute(
    $accesos[$plan]
);


//crear base de datos
createdb($nameDB_ok);
insertTables($nameDB_ok);
validacionDatos($last_id);
header("Location:../../ok/");
?>