<?php
$nombre = $_SESSION['nombre'];
$email = $_SESSION['email'];
$img = $_SESSION['img'];
$nomEmpresa = $_SESSION["nomEmpresa"];
?>
<!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span> <?php echo $nomEmpresa; ?> <span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar" style="background-color: <?php echo $color2?>">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Menu</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a class="br-menu-link" data-toggle="modal" data-target="#cajaModal">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Abrir caja primero</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
      </ul><!-- br-sideleft-menu -->
      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->