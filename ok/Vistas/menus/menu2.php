<?php
$nombre = $_SESSION['nombre'];
$email = $_SESSION['email'];
$img = $_SESSION['img'];
$nomEmpresa = $_SESSION["nomEmpresa"];
?>
<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo" style = " font-size:15px;"><a href="../Principal/main2.php"><span>[</span>
    <?php echo $nomEmpresa; ?> <span>]</span>
  </a></div>
<div class="br-sideleft sideleft-scrollbar" style="background-color: <?php echo $color2 ?>">
  <label class="sidebar-label pd-x-10 mg-t-20 op-3">Menu</label>
  <ul class="br-sideleft-menu">
    <li class="br-menu-item">
      <a href="#" class="br-menu-link" id="cajarosa">
        <i class="fa-solid fa-building-columns"></i>
        <span class="menu-item-label">Caja</span>
      </a><!-- br-menu-link -->
    </li><!-- br-menu-item -->
    <li class="br-menu-item">
      <a href="#" class="br-menu-link" id="producto">
        <i class="fa-solid fa-box"></i>
        <span class="menu-item-label">Crear producto</span>
      </a><!-- br-menu-link -->
    </li><!-- br-menu-item -->
    <li class="br-menu-item">
      <a href="#" class="br-menu-link" id="ingproducto">
        <i class="fa-solid fa-boxes-stacked"></i>
        <span class="menu-item-label">Entrada de producto</span>
      </a><!-- br-menu-link -->
    </li><!-- br-menu-item -->
    <li class="br-menu-item">
      <a href="#" class="br-menu-link" id="proveedores">
        <i class="fa-solid fa-store"></i>
        <span class="menu-item-label">Proveedores</span>
      </a><!-- br-menu-link -->
    </li><!-- br-menu-item -->
    <li class="br-menu-item">
      <a href="#" class="br-menu-link" id="reportes">
        <i class="fa-solid fa-file-excel"></i>
        <span class="menu-item-label">Reportes</span>
      </a><!-- br-menu-link -->
    </li><!-- br-menu-item -->
    <li class="br-menu-item">
      <a href="#" class="br-menu-link" id="producto">
        <i class="fa-solid fa-plus"></i>
        <span class="menu-item-label">Crear producto</span>
      </a><!-- br-menu-link -->
    </li><!-- br-menu-item -->
    <li class="br-menu-item">
      <a href="#" class="br-menu-link" id="cobrosmarca">
        <i class="fa-solid fa-file-invoice-dollar"></i>
        <span class="menu-item-label">Crear cobros</span>
      </a><!-- br-menu-link -->
    </li><!-- br-menu-item -->
    <li class="br-menu-item">
      <a href="#" class="br-menu-link" id="historialrecibos">
        <i class="fa-solid fa-envelope"></i>
        <span class="menu-item-label">Historial de emails</span>
      </a><!-- br-menu-link -->
    </li><!-- br-menu-item -->
    <li class="br-menu-item">
      <a href="#" class="br-menu-link" id="marcacobros">
        <i class="fa-solid fa-money-bill"></i>
        <span class="menu-item-label">Pagos</span>
      </a><!-- br-menu-link -->
    </li><!-- br-menu-item -->
    <li class="br-menu-item">
      <a href="#" class="br-menu-link" id="respaldarData">
        <i class="fa-regular fa-floppy-disk"></i>
        <span class="menu-item-label">Respaldar</span>
      </a><!-- br-menu-link -->
    </li><!-- br-menu-item -->
    <li class="br-menu-item">
      <a href="#" class="br-menu-link" id="clientes">
        <i class="fa-solid fa-person"></i>
        <span class="menu-item-label">Clientes</span>
      </a><!-- br-menu-link -->
    </li><!-- br-menu-item -->
    <li class="br-menu-item">
      <a href="#" class="br-menu-link" id="promociones">
        <i class="fa-solid fa-rectangle-ad"></i>
        <span class="menu-item-label">Promociones</span>
      </a><!-- br-menu-link -->
    </li><!-- br-menu-item -->

  </ul><!-- br-sideleft-menu -->
  <br>
</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->