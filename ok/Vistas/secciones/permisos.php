<?php

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

 

 $evento = $_GET['evento'];


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
            <span class="menu-item-label">Permisos</span>
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




$sql = "SELECT * FROM usuarios";
if ($result = $conn->query($sql)) {
  
}

?>

       <table class="table">
  <thead class="thead-dark">
  <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Nombre de Empresa</th>
      <th scope="col">Status</th>      
      <th scope="col">Editar Permisos</th>


    </tr>

<?php


if ($evento == 1){
  echo  '<script language="javascript">alert("usuario verificado");</script>';;
   }

if ($result = $conn->query($sql)) {
  while ($row = $result->fetch_assoc()) {
    $idUsuario = $row['idusuarios'];
    $emailRow = $row['email'];
    $nombreRow = $row['nombre'];
    $nomEmpresaRow = $row['nomEmpresa'];
    $status = $row['status'];

      echo '
    <tbody>
      <tr> 
                <th scope="row">'.$idUsuario.'</th>
                <th>'.$nombreRow.'</th> 
                <th>'.$emailRow.'</th> 
                <th>'.$nomEmpresaRow.'</th> 
                <th>'.$status.'</th> 
                <th><a href="../../db/consultas/actualizarPermisos.php?idPermisos='.$idUsuario.'"> <img src="../../img/permisos.png" alt="permisos" width="50"></a></th> 
            </tr>
            </tbody>'
            ;
  }
  $result->free();
} 
?>
</thead>
  <tbody>
    
  </tbody>
</table>




         </div><!-- form-layout-footer -->
       </div><!-- form-layout -->

<!-- termina form layout -->

<?php 
$Usuario = 

$sql = "SELECT * FROM planes where idUsuario = $Usuario";
if ($result = $conn->query($sql)) {
  
}


?>

<!-- empieza modal Editar Permisos-->
 <!-- BASIC MODAL -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Permisos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
               
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Termina Modal -->




    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>

    <script src="../../lib/jquery/jquery.min.js"></script>
    <script src="../../lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../../lib/moment/min/moment.min.js"></script>
    <script src="../../lib/peity/jquery.peity.min.js"></script>
    <script src="../../lib/highlightjs/highlight.pack.min.js"></script>

    <script src="../../js/bracket.js"></script>

    <script>
      $(function(){

        // showing modal with effect
        $('.modal-effect').on('click', function(e){
          e.preventDefault();

          var effect = $(this).attr('data-effect');
          $('#modaldemo8').addClass(effect);
          $('#modaldemo8').modal('show');
        });

        // hide modal with effect
        $('#modaldemo8').on('hidden.bs.modal', function (e) {
          $(this).removeClass (function (index, className) {
              return (className.match (/(^|\s)effect-\S+/g) || []).join(' ');
          });
        });
      });
    </script>
    
  </body>
</html>
