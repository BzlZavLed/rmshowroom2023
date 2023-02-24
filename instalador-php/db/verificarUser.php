<?php 
 include('../../db/config.php');
 $email    = $_REQUEST['email'];


 $jsonData = array();
 $selectQuery   = ("SELECT * FROM usuarios WHERE email = '".$email."' ");
 $query         = mysqli_query($con, $selectQuery);
 $totalCliente  = mysqli_num_rows($query);
   if( $totalCliente <= 0 ){
     $jsonData['success'] = 0;
     $jsonData['message'] = 'No existe email ' .$email;
     $jsonData['message'] = '';
 } else{
     $jsonData['success'] = 1;
     $jsonData['message'] = '<p style="color:red;">Ya existe el email:  <strong>(' .$email.')<strong></p>';
   }

 header('Content-type: application/json; charset=utf-8');
 echo json_encode( $jsonData );

