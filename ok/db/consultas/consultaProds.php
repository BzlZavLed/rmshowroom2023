<?php
session_start();

include("../../../db/conn2.php");

include("funcionesConsulta.php");
date_default_timezone_set('America/Monterrey');




$data = array();
$i = 0;
$productos = "";
if(isset($_POST["user"])){
$user = $_POST["user"];
$provid = $_POST["provid"];
    if($user == 1 || $user == 2){
        $productos = "SELECT e.*,f.nombre as provee FROM `producto` e INNER JOIN proveedores f ON e.proveedorid=f.ident";
    }else{
        $productos = "SELECT e.*,f.nombre as provee FROM `producto` e INNER JOIN proveedores f ON e.proveedorid=f.ident WHERE proveedorid = ".$provid;
    }
}else{

$productos = "SELECT e.*,f.nombre as provee FROM `producto` e INNER JOIN proveedores f ON e.proveedorid=f.ident";

}	

if(!empty(selectMultipleRows($conn3, $productos))){ 		

foreach(selectMultipleRows($conn3, $productos) as $row)
    {
        $array[$i]["ident"] = $row['ident'];
        $array[$i]["nombre"] = $row['nombre'];
        $array[$i]["descripcion"] = $row['descripcion'];
        $array[$i]["fecha"] = $row['fecha'];
        $array[$i]["proveedorid"] = $row['proveedorid'];
        
        $array[$i]["usuario"] = $row['usuario'];
        $array[$i]["precio"] = $row['precio'];
        $array[$i]["provee"] = $row['provee'];
        $i++;
    }
}
    if(!(empty($array))) // If something was fetched
    {
        //while(list($key, $value) = each($array))
        foreach ($array as $key => $value) 
        {
             $json[] = array
             (
                 'ident' => utf8_encode($value["ident"]),
                 'nombre' => utf8_encode($value["nombre"]),
                 'descripcion' => utf8_encode($value["descripcion"]),
                 'fecha' => utf8_encode($value["fecha"]),
                 'provee' => utf8_encode($value["provee"]),
                 'precio' => utf8_encode($value["precio"]),
                 'usuario' => utf8_encode($value["usuario"]),
                 
                 
                 'message' => 'success'
             );
            
       }
    }
    else // Nothing found in database
    { 
        $json[] = array
        (    'consulta' => $productos,
             'message' => 'nothing found'
        );
    }

   
$jsonT = array('resp' => $json);

echo json_encode(utf8ize($jsonT));
flush();



?>


