<?php
session_start();
$nombre = $_SESSION['nombre'];
$email = $_SESSION['email'];
$img = $_SESSION['img'];
$nomEmpresa = $_SESSION["nomEmpresa"];
$idplan = $_SESSION['plan']; 
$idUsuario = $_SESSION['id'];
include("../../../db/conn.php");
?>
<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo" style=" font-size:15px;"><a href="../Principal/main2.php"><span>[</span>
    <?php echo $nomEmpresa; ?> <span>]</span>
  </a></div>
<div class="br-sideleft sideleft-scrollbar" style="background-color: <?php echo $color2 ?>">
  <label class="sidebar-label pd-x-10 mg-t-20 op-3">Menu</label>


  <ul class="br-sideleft-menu">
 
   <!--  <?php
  

    
    $sql = "SELECT * FROM planes WHERE idUsuario = '$idUsuario'";
    $result = mysqli_fetch_array(mysqli_query($conn, $sql));
    $count = 0;
    foreach ($result as $key => $value) {

if (!is_numeric($key)){
      if ($value == 1) {
        $sqlmenu = "SELECT * FROM menu WHERE idmenu = '$key'";
        $resultmenu = mysqli_fetch_array(mysqli_query($conn, $sqlmenu));
         $icono = $resultmenu['iconoMenu'];
         $nombre = $resultmenu['nombreMenu'];
        
        echo '<li class="br-menu-item">
    <a href="#" class="br-menu-link" id="' . $key . '">
      <i class="' . $icono . '"></i>
      <span class="menu-item-label">' . $nombre . '</span>
    </a><!-- br-menu-link -->
  </li><!-- br-menu-item --> <br>';
      }
    } 
  }

    ?>

   

  </ul><!-- br-sideleft-menu -->
  <br>
</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->