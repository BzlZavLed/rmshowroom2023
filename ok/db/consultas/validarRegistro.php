<?php 
    
    session_start();

    include("../../../db/conn.php");
    
    date_default_timezone_set('America/Monterrey');
    
    $id = $_GET["id"];
    $status = '1';
    $fecha = date("Y-m-d h:m:s");
    
    $actualizar = "UPDATE usuarios SET status='$status', lastUpdate='$fecha' WHERE idusuarios = '$id'";
    $resultado = $conn->query($actualizar);
    if ($resultado){
       $evento = '1';
       header('Location:' . getenv('HTTP_REFERER')."?evento=".$evento);
       //header("Location:".$_SERVER[HTTP_REFERER]."?message=".$message);
       die;
    }else{
       echo "no se han actualizado los datos _";
    }
    
    mysqli_close($conn);
?>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>