<?php



include("../../../db/conn2.php");

date_default_timezone_set('America/Monterrey');


$user = $_POST["user"];
$pass = $_POST["pass"];
$sql = "SELECT * FROM usuarios WHERE email = '".$user."'";


$stmt = mysqli_query( $conn, $sql);
if( $stmt === false ) {
   echo json_encode(array('return' => 2));   
}
while( $row = mysqli_fetch_array( $stmt) ) {
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


      	$registro = "INSERT INTO registro (accion,user,fecha) VALUES ('Inicio sesión ".$user."','".$user."','".date("Y-m-d h:i:s")."')";
            $exec2 = mysqli_query($conn,$registro);
      	header('Content-Type: application/json');
      	echo json_encode(array('return' => 1));
      	exit;


      }else{
            $registro = "INSERT INTO registro (accion,user,fecha) VALUES ('Fallo inicio de sesión ".$user."','".$user."','".date("Y-m-d h:i:s")."')";
            $exec2 = mysqli_query($conn,$registro);
      	header('Content-Type: application/json');
      	echo json_encode(array('return' => 2));
      	exit;
      }
}

mysqli_close($conn);
?>