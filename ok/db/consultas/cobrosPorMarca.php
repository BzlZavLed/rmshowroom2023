<?php
session_start();
include("../../../db/conn2.php");


include("funcionesConsulta.php");
date_default_timezone_set('America/Monterrey');
$data = array();
$i = 0;
$cobrosamarca = "";
$idmarca = $_POST['marca'];

$cobrosamarca = "SELECT id,marca,nombre_marca,mes_cobro,fecha,importe,email FROM mensualidad WHERE marca = '".$idmarca."'ORDER BY id DESC ";
   





				
if(!empty(selectMultipleRows($conn3, $cobrosamarca))){ 		

foreach(selectMultipleRows($conn3, $cobrosamarca) as $row)
    {
        $array[$i]["id"] = $row['id'];
        $array[$i]["marca"] = $row['marca'];
        $array[$i]["nombre_marca"] = $row['nombre_marca'];
        $array[$i]["mes_cobro"] = $row['mes_cobro'];
        $array[$i]["fecha"] = $row['fecha'];
        $array[$i]["importe"] = $row['importe'];
        $array[$i]["email"] = $row['email'];
        $i++;
    }
}
    if(!(empty($array))) // If something was fetched
    {
        while(list($key, $value) = each($array))
        {
             $json[] = array
             (
                'id' => utf8_encode($value["id"]),
                 'marca' => utf8_encode($value["marca"]),
                 'nombre_marca' => utf8_encode($value["nombre_marca"]),
                 'mes_cobro' => utf8_encode($value["mes_cobro"]),
                 'fecha' => utf8_encode($value["fecha"]),
                 'importe' => utf8_encode($value["importe"]),
                 'email' => utf8_encode($value["email"]),
                 'consulta' => utf8_encode($cobrosamarca),
                 'message' => 'success'
             );
            
       }
    }
    else // Nothing found in database
    { 
        $json[] = array
        (    'consulta' => $cobrosamarca,
             'message' => 'nothing found'
        );
    }

$jsonT = array('resp' => $json);
echo json_encode($jsonT);
flush();



?>