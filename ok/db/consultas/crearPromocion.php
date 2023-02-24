<?php
session_start();
$dir = $_SERVER['DOCUMENT_ROOT'].'/carpeta sin título/versiones/rmshowroom2023';
define("dir",  $dir);

include($dir."/db/conn.php");

include("tools.php");;
date_default_timezone_set('America/Monterrey');


$data = $_POST["data"];
$action = $_POST["action"];
$user = $_SESSION["nombre"];
$date = date("Y-m-d");

if ($action == "insert") {
    if (isset($data["addall"])) {
        $productosProveedor = getAllData($conn3, "SELECT ident 
                                                FROM producto
                                                WHERE proveedorid = 
                                                    (SELECT proveedorid 
                                                     FROM producto 
                                                     WHERE ident = '" . $data["producto"] . "')");
        foreach ($productosProveedor as $productoprov) {
            $query = insertPromotion($conn3,$productoprov[0], $data);
            $exec = insertOrUpdate($conn3, $query, "Creacion de promocion " . $productoprov[0], $user);
        }
    } else {
        $query = insertPromotion($conn3,$data['producto'], $data);
        $exec = insertOrUpdate($conn3, $query, "Creacion de promocion " . $data["producto"], $user);
    }




    $resp = array("resp" => $exec);
    if ($exec == "Success") {
        $get = "SELECT * FROM promociones ORDER BY id DESC";
        $getData = getAllData($conn3, $get);
        $resp = array("resp" => $exec, "data" => $getData);
    }
} else {
    $get = "SELECT * FROM promociones ORDER BY id DESC";
    $getData = getAllData($conn3, $get);
    $resp = array("data" => $getData);
}


mysqli_close($conn3);

echo json_encode($resp);
function insertPromotion($conn3,$prodId, $data)
{
    $proveedorid = getData($conn3,"SELECT proveedorid,(SELECT nombre FROM proveedores WHERE ident = producto.proveedorid) AS nombreProv,nombre  
            FROM producto 
            WHERE ident = '" . $prodId . "'");
    
    if ($data["tipoPromocion"] == "Descuento") {
        $query = "INSERT INTO promociones (producto,productoNombre,proveedorid,proveedorNombre,tipoPromocion,descuento,minimoCompra,cantidadGratis,fechaVencimiento) 
                VALUES ('" . $prodId . "','" . $proveedorid[2] . "','" . $proveedorid[0] . "','" . $proveedorid[1] . "','" . $data['tipoPromocion'] . "','" . $data['descuento'] . "','-','-','" . $data['fechaVencimiento'] . "')";
    } else {
        $query = "INSERT INTO promociones (producto,productoNombre,proveedorid,proveedorNombre,tipoPromocion,descuento,minimoCompra,cantidadGratis,fechaVencimiento) 
        VALUES ('" . $prodId . "','" . $proveedorid[2] . "','" . $proveedorid[0] . "','" . $proveedorid[1] . "','" . $data['tipoPromocion'] . "','-','" . $data['minimoCompra'] . "','" . $data['cantidadGratis'] . "','" . $data['fechaVencimiento'] . "')";
    }
    return $query;
}
