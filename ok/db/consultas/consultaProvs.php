<?php
session_start();
include("../../../db/conn2.php");

include("funcionesConsulta.php");

$data = array();
$i = 0;

$proveedores = "SELECT * FROM proveedores";

				
if(!empty(selectMultipleRows($conn3, $proveedores))){ 		

foreach(selectMultipleRows($conn3, $proveedores) as $row)
    {
        $array[$i]["ident"] = $row['ident'];
        $array[$i]["nombre"] = $row['nombre'];
        $array[$i]["fecha"] = $row['fecha'];
        $array[$i]["tel"] = $row['tel'];
        $array[$i]["email"] = $row['email'];
        $array[$i]["sucursal"] = $row['sucursal'];
        $array[$i]["bancaria"] = $row['bancaria'];
        $array[$i]["ciudad"] = $row['ciudad'];
        $array[$i]["importe"] = $row['importe'];
        $i++;
    }
}
    if(!(empty($array))) // If something was fetched
    {
       // while(list($key, $value) = each($array))
       foreach($array as $key=>$value)
        {
             $json[] = array
             (
                 'ident' => utf8_encode($value["ident"]),
                 'nombre' => utf8_encode($value["nombre"]),
                 'fecha' => utf8_encode($value["fecha"]),
                 'tel' => utf8_encode($value["tel"]),
                 'email' => utf8_encode($value["email"]),
                 'sucursal' => utf8_encode($value["sucursal"]),
                 'bancaria' => utf8_encode($value["bancaria"]),
                 'ciudad' => utf8_encode($value["ciudad"]),
                 'importe' => utf8_encode($value["importe"]),
                 'consulta' => utf8_encode($proveedores),
                 'message' => 'success'
             );
            
       }
    }
    else // Nothing found in database
    { 
        $json[] = array
        (    'consulta' => $proveedores,
             'message' => 'nothing found'
        );
    }

$jsonT = array('resp' => $json);
echo json_encode($jsonT);
flush();



?>