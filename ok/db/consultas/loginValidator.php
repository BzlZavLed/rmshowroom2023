<?php



include("../../../db/conn.php");

date_default_timezone_set('America/Monterrey');


$user = $_POST["user"];
$pass = $_POST["pass"];
$sql = "SELECT * FROM usuarios WHERE email = '".$user."'";
//echo $sql;
$stmt = mysqli_query( $conn, $sql);
if( $stmt === false ) {
   echo json_encode(array('return' => 2));   
}

if (mysqli_num_rows($stmt)==0) { 
	echo json_encode(array('return' => 3)); 
}

// if ($status == 1){
// 	echo json_encode(array('return' => 5)); 
// }else {
// 	echo json_encode(array('return' => 4)); 
// }

while( $row = mysqli_fetch_array( $stmt) ) {
	$status = $row['status'];
	if($status == 0){
		echo json_encode(array('return' => 6));
exit;
	}


	$passDB = $row["password"];
      if(password_verify($pass,$passDB)){
      	session_start();
        $_SESSION["id"] = $row["idusuarios"];
      	$_SESSION["email"] = $row["email"];
      	$_SESSION["nombre"] = $row["nombre"];
      	$_SESSION["puesto"] = $row["puesto"];
            $_SESSION["priv1"] = $row["priv1"];
            $_SESSION["priv2"] = $row["priv2"];
            $_SESSION["priv3"] = $row["priv3"];
            $_SESSION["priv4"] = $row["priv4"];
            $_SESSION["nomEmpresa"] = $row["nomEmpresa"];
			$_SESSION["nomDB"] = $row["nomDB"];
			$_SESSION["color1"] = $row["color1"];
			$_SESSION["color2"] = $row["color2"];
			$_SESSION["color3"] = $row["color3"];
			$_SESSION["img"] = $row['logo'];
			$_SESSION["plan"] = $row['idPlan'];
			$idPlan = $row['idPlan'];
			setcookie("database", $row["nomDB"] , time()+84600, "/");


      	$registro = "INSERT INTO registro (accion,user,fecha) VALUES ('Inicio sesión ".$user."','".$user."','".date("Y-m-d")."')";
            $exec2 = mysqli_query($conn,$registro);
      	header('Content-Type: application/json');
		
      	echo json_encode(array('return' => 1));
      	exit;


      }else{
            $registro = "INSERT INTO registro (accion,user,fecha) VALUES ('Fallo inicio de sesión ".$user."','".$user."','".date("Y-m-d")."')";
            $exec2 = mysqli_query($conn,$registro);
      	header('Content-Type: application/json');
      	echo json_encode(array('return' => 2));
      	exit;
      }
}

mysqli_close($conn);
?>