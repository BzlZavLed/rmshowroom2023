<?php 
include('conexion/config.php');
$nomEmpresa    = $_REQUEST['nomEmpresa'];


$jsonData2 = array();
$selectQuery   = ("SELECT * FROM usuarios WHERE nomEmpresa='".$nomEmpresa."' ");
$query         = mysqli_query($con, $selectQuery);
$totalCliente  = mysqli_num_rows($query);
echo $totalCliente;
  if( $totalCliente <= 0 ){
    $jsonData2['success'] = 1;
    $jsonData2['message'] = 'No existe email ' .$nomEmpresa;
    $jsonData2['message'] = '';
} else{
    $jsonData2['success'] = 0;
    $jsonData2['message'] = '<p style="color:red;">Ya existe el nombre:  <strong>(' .$nomEmpresa.')<strong></p>';
  }

header('Content-type: application/json; charset=utf-8');
echo json_encode( $jsonData2 );

?>