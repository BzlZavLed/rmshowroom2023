<?php
 
//  incluir la conexion
include("../conexiones/conexion2.php");


//recuperar los datos del formulario
 $ID = $_POST['id'];
 $logoActual = $_POST['logoActual'];
 $color1 = $_POST['color1'];
 $color2 = $_POST['color2'];
 $color3 = $_POST['color3'];
 $nombre = $_POST['Nombre'];
 $logo = $_FILES['archivo']['name'];

 //
$fecha = date("Y-m-d h:m:s");



echo $color1;
echo '<br>';
echo $color2;
echo '<br>';
echo $color3;
echo '<br>';
echo $nombre;
echo '<br>';
echo $logoActual;
echo '<br>';
echo $fecha;
echo '<br>';
echo $ID;


if (isset($logo) && $logo == "") {
   $actualizar = "UPDATE usuarios SET color1='$color1', color2='$color2', color3='$color3', nomEmpresa='$nombre', logo='$logoActual', lastUpdate='$fecha' WHERE id = '$ID'";
   $resultado = mysqli_query($conexion, $actualizar); 
   
   if ($resultado){
      echo "se han actualizado los cambios correctamente";
      header('Location:../../Vistas/Principal/main2.php');
   }else{
      echo "no se han actualizado los datos";
   }
}else{

//Si se quiere subir una imagen
if (isset($_POST['subir'])) {
   //Recogemos el archivo enviado por el formulario
   $archivo = $nombre .'_'. $_FILES['archivo']['name'];
   //Si el archivo contiene algo y es diferente de vacio
   if (isset($archivo) && $archivo != "") {
      //Obtenemos algunos datos necesarios sobre el archivo
      $tipo = $_FILES['archivo']['type'];
      $tamano = $_FILES['archivo']['size'];
      $temp = $_FILES['archivo']['tmp_name'];
      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
     if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 5000000))) {

     }
     else {
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor
        if (move_uploaded_file($temp, '../../img/perfil/'.$archivo)) {
            //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
            chmod('images/'.$archivo, 0777);
            //Mostramos el mensaje de que se ha subido co éxito
            echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
            //Mostramos la imagen subida
            echo '<p><img src="images/'.$archivo.'"></p>';

//

$actualizar = "UPDATE usuarios SET color1='$color1', color2='$color2', color3='$color3', nomEmpresa='$nombre', logo='$archivo', lastUpdate='$fecha' WHERE id = '$ID'";
$resultado = mysqli_query($conexion, $actualizar); 

if ($resultado){
   echo "se han actualizado los cambios correctamente";
}else{
   echo "no se han actualizado los datos";
}
//

                      header('Location:../config.php');        
                     }
        else {
           //Si no se ha podido subir la imagen, mostramos un mensaje de error
           echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';

        }
      }
   }
}
}

?>