<?php 
require_once("../conexion/conn2.php");
session_start();

if(isset($_POST['login'])){
	$email = trim($_POST['username']);
	$password = trim($_POST['password']);
	

    ECHO $email;
    ECHO $password;
    ECHO "<BR>";


	$sql = "SELECT * FROM usuarios WHERE email = '".$email."'";
	$rs = mysqli_query($conexion,$sql);
	$numRows = mysqli_num_rows($rs);
	
	if($numRows  == 1){
		$row = mysqli_fetch_assoc($rs);
		if(password_verify($password,$row['password'])){
			echo "Password verified";
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['nomEmpresa'] = $row['nomEmpresa'];
            $_SESSION['img'] = $row['logo'];
			$_SESSION['plan'] = $row['idPlan'];

            header('Location: ../../index.php');
            
		}
		else{
			echo "Wrong Password";
            echo $row['password'];
		}
	}
	else{
		echo "No User found";
	}
}
?>