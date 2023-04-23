
<?php
$idPermisos = $_GET['idPermisos'];

include("../../../db/conn.php");

session_start();

 
 $ID = $_SESSION['id'];
 $nombre = $_SESSION['nombre'];
 $email = $_SESSION['email'];
 $img = $_SESSION['img'];

 
 $ID = $_SESSION['id'];
 $nombre = $_SESSION['nombre'];
 $email = $_SESSION['email'];
 $img = $_SESSION['img'];

 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Rosa Mexicano | Dashboard</title>

    <!-- vendor css --> 
    <link href="../../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
		<link href="../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
		<link href="../../lib/highlightjs/styles/github.css" rel="stylesheet">


  <!-- Bracket CSS -->
  <link rel="stylesheet" href="../../css/bracket.css">

  </head>
<body>
<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href=""><span>[</span>Rosa  <i>Mexicano</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navegacion</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="../Principal/main2.php" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Regresar</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="permisos.php" class="br-menu-link">
          <i class="ionicons ion-key"></i>                    
            <span class="menu-item-label">Permisos <?php echo $idPermisos; ?></span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
      

      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
 <div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="input-group hidden-xs-down wd-170 transition">
          <span class="input-group-btn">
            <button type="button" class="btn btn-primary">Visitar sitio <i class="fa-solid fa-arrow-up-right-from-square"></i></button>
          </span>
        </div><!-- input-group -->
      </div><!-- br-header-left -->
      <div class="br-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i class="icon ion-ios-email-outline tx-24"></i>
              <!-- start: if statement -->
              <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
              <!-- end: if statement -->
            </a>
            <div class="dropdown-menu dropdown-menu-header">
              <div class="dropdown-menu-label">
                <label>Mensajes</label>
              </div><!-- d-flex -->

              <div class="media-list">
                <!-- loop ends here -->


                <a href="" class="media-list-link read">
                  <div class="media">
                    <img src="https://via.placeholder.com/500" alt="">
                    <div class="media-body">
                      <div>
                        <p>Adinistrador</p>
                        <span>ayer</span>
                      </div><!-- d-flex -->
                      <p>Su plan vence en 3 dias, </p>
                    </div>
                  </div><!-- media -->
                </a>
                <div class="dropdown-footer">
                  <a href=""><i class="fa fa-angle-down"></i>Ver todos los mensajes</a>
                </div>
              </div><!-- media-list -->
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->

          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name hidden-md-down">  <?PHP ECHO $nombre; ?></span>
              <img src="plugin/images/<?PHP ECHO $img;?>" class="wd-32 rounded-circle" alt="">
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-250">
              <div class="tx-center">
                <a href=""><img src="plugin/images/<?PHP ECHO $img; ?>" class="wd-80 rounded-circle" alt=""></a>
                <h6 class="logged-fullname"><?PHP ECHO $nombre; ?></h6>
                <p><?PHP ECHO $email; ?></p>
              </div>
              <hr>
              <ul class="list-unstyled user-profile-nav">
                <li><a href=""><i class="icon ion-ios-person"></i> Editar Perfil</a></li>
                <li><a href="db/sesion/cerrarSesion.php"><i class="icon ion-power"></i> Cerrar Sesion</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>

      </div><!-- br-header-right -->
    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->
   <!-- ########## START: MAIN PANEL ########## -->
   <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">rosa Mexicano</a>
          <span class="breadcrumb-item active">Dashboard</span>
        </nav>
      </div><!-- br-pageheader -->


      <div class="br-pagebody">

     <!-- inicia form layout -->
     <div class="br-pagebody">
     <div class="br-section-wrapper">
       <h6 class="br-section-label">Administracion de roles</h6>
       
       <p class="br-section-text">Elije las opciones de configuracion. </p>

       <div class="form-layout form-layout-1">


       <?php


$sql = "SELECT * FROM planes WHERE idUsuario =$idPermisos";
if ($result = $conn->query($sql)) {


}
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {

$caja = $row['cajarosa'];
$clientes = $row['clientes'];
$crearCobros = $row['cobrosmarca'];
$historialEmails = $row['historialrecibos'];
$entradaProductoCaja = $row['ingproducto'];
$pagos = $row['marcacobros'];
$crearProducto = $row['producto'];
$promociones = $row['promociones'];
$proveedores = $row['proveedores'];
$reportes = $row['reportes'];
$respaldar = $row['respaldarData'];
}
}
?>

       <div class="container">      
        
       <form action="../../db/consultas/permisos.php" method="POST" enctype="multipart/form-data"/>
                    <div class="row">
                        <label> <h3>id: <?php echo $idPermisos; ?></h3> </label>
                        <input type="hidden" name="idPermisos" value="<?php echo $idPermisos ?>">
                    </div>

                    <div class="row">
                        <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" name="caja"  id="caja" value="caja"  <?php if($caja == 1){echo 'checked';}?>>
                        <label for="check1" class="form-check-label">caja</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" name="clientes"  id="" value="clientes" <?php if($clientes == 1){echo 'checked';}?>>
                        <label for="check1" class="form-check-label">clientes</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" name="crearCobros"  id="crearCobros" value="crearCobros" <?php if($crearCobros == 1){echo 'checked';}?>>
                        <label for="check1" class="form-check-label">Crear cobros</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" name="historialEmails"  id="historialEmails" value="historialEmails" <?php if($historialEmails == 1){echo 'checked';}?>>
                        <label for="check1" class="form-check-label">Historial de emails</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" name="entradaProductoCaja"  id="entradaProductoCaja" value="entradaProductoCaja" <?php if($entradaProductoCaja == 1){echo 'checked';}?>>
                        <label for="check1" class="form-check-label">Entrada de productos</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" name="pagos"  id="pagos" value="pagos" <?php if($pagos == 1){echo 'checked';}?>>
                        <label for="check1" class="form-check-label">Pagos</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" name="crearProducto"  id="crearProducto" value="crearProducto" <?php if($crearProducto == 1){echo 'checked';}?>>
                        <label for="check1" class="form-check-label">Crear producto</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" name="promociones"  id="promociones" value="promociones" <?php if($promociones == 1){echo 'checked';}?>>
                        <label for="check1" class="form-check-label">Promociones</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" name="proveedores"  id="proveedores" value="proveedores" <?php if($proveedores == 1){echo 'checked';}?>>
                        <label for="check1" class="form-check-label">Proveedores</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" name="reportes"   id="reportes" value="reportes" <?php if($reportes == 1){echo 'checked';}?>>
                        <label for="check1" class="form-check-label">Reportes</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" name="respaldar"  id="respaldar" value="respaldar" <?php if($respaldar == 1){echo 'checked';}?>>
                        <label for="check1" class="form-check-label">Respaldar</label>
                        </div>
                    </div>
                    

                </div>

                


      </div>
      <div class="container">
            <div class="row float-center">
            <button class="btn btn-info float-right" name="guardar" id="guardar">Guardar</button>
            </div>


      </div>
      </form>
         </div><!-- form-layout-footer -->
       </div><!-- form-layout -->

<!-- termina form layout -->


    
</body>
</html>