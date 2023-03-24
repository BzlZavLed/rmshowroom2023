<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../../../PHPMailer/Exception.php';
require '../../../PHPMailer/PHPMailer.php';
require '../../../PHPMailer/SMTP.php';

 date_default_timezone_set('America/Monterrey');

 //  incluir la conexion
include("../../../db/conn.php");
$email = $_POST['email'];
echo $email;
$query = "SELECT * FROM usuarios where email = '$email' AND status = 1";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$id = $row['idusuarios'];
$nombre = $row['nombre'];

if($result->num_rows > 0){
 
    $mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp-mail.outlook.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'alisgoes@outlook.com';
    $mail->Password   = 'Lp098xdr';
    $mail->Port       = 587;

    $mail->setFrom('alisgoes@outlook.com', 'Aldrin');
    $mail->addAddress($email, 'usuario');
    $mail->isHTML(true);
    $mail->Subject = 'Recuperación de contraseña';
    $mail->Body    = 'Hola, este es un correo generado para solicitar tu recuperación de contraseña, 
    por favor, visita la página de
     <a href="http://localhost:8888/carpeta%20sin%20ti%CC%81tulo/versiones/rmshowroom2023/ok/Vistas/Principal/change_password.php?id='.$id.'">Recuperación de contraseña</a>';

    $mail->send();
    echo ' mensaje enviado';
    header("Location: ../../index.html?message=ok");
} catch (Exception $e) {
    echo 'error';
  header("Location: ../../index.html?message=error");
}

}else{
    $message = 'no se encuentra';
  header("Location: ../../index.html?message=not_found");
}


?>