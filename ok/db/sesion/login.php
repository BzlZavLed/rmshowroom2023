<?php
include('../conexion/conn.php');
session_start();
 
if (isset($_POST['login'])) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
    
 
    $query = $connection->prepare("SELECT * FROM usuarios WHERE email=: '".$username."'");
    $query->bindParam("email", $username, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['user_id'] = $result['id'];
            $_SESSION['nombre'] = $result['nombre'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['nomEmpresa'] = $result['nomEmpresa'];
            $_SESSION['img'] = $result['logo'];
echo '<br>  ';
echo $_SESSION['user_id'];
            echo '<p class="success">Congratulations, you are logged in!</p>';
       //     header('Location: ../../index.php');
                } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}
$idUser = $_SESSION['user_id'];
// configuracion

$resultado = $db->query('SELECT * FROM configuraciones');
while ($idUser = $resultado->fetch()){ //O bien ($resultado->fetch(PDO::FETCH_BOTH)
    echo $personas['id']." ".$personas[1]." ".$personas['activo']."<br>";

    $_SESSION['img'] = $result['logo'];
}
?>