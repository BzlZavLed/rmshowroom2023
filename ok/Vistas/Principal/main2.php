<?php
session_start();
date_default_timezone_set('America/Monterrey');

include("../../../db/conn2.php");
if (!isset($_SESSION["nombre"])) {
  header("Location: index.html");
  exit();
}
$nombre = $_SESSION['nombre'];
$email = $_SESSION['email'];
$img = $_SESSION['img'];
$user = $_COOKIE["database"];

$color1 = $_SESSION["color1"];
$color2 = $_SESSION["color2"];
$color3 = $_SESSION["color3"];


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
  <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="600">

  <!-- Meta -->
  <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="author" content="ThemePixels">

  <title>
    <?php echo $user; ?>
  </title>

  <!-- vendor css -->
  <link rel="stylesheet" href="https://kit.fontawesome.com/5cc1067d3d.css" crossorigin="anonymous">
  <link href="../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Bracket CSS -->
  <link rel="stylesheet" href="../../css/bracket.css">
  <style type="text/css">
    .loader {
      border: 16px solid #f3f3f3;
      border-radius: 50%;
      border-top: 16px solid #3498db;
      width: 120px;
      height: 120px;
      -webkit-animation: spin 2s linear infinite;
      /* Safari */
      animation: spin 2s linear infinite;
    }

    .content-desktop {
      display: block;
    }

    .content-mobile {
      display: none;
    }

    .previous {
      border-radius: 8px;
      border: 2px solid #FCE5D4;
      padding: 4px;
      width: 15px;
      height: 25px;
    }

    .br-mainpanel {
      margin-left: 0px;
    }

    .next {
      border-radius: 8px;
      border: 2px solid #FCE5D4;
      padding: 5px;
      width: 15px;
      height: 25px
    }

    @media screen and (max-width: 768px) {

      .content-desktop {
        display: none;
      }

      .content-mobile {
        display: block;
      }

    }

    /* clases de estilo de vista general */
    .backgroudMainPanel {
      background-color:
        <?php echo $color1 ?>
      ;
    }

    .backgroundMainCard {
      border-radius: 12px;
      box-shadow: 0 6px 10px -4px rgb(0 0 0 / 15%);
      background-color:
        <?php echo $color2 ?>
      ;
      color: #252422;
      margin-bottom: 20px;
      position: relative;
      border: 0 none;
      transition: transform 300ms cubic-bezier(0.34, 2, 0.6, 1), box-shadow 200ms ease
    }

    .main-panel {
      position: relative;
      float: right;
      width: calc(100% - 260px);
      background-color:
        <?php echo $color1 ?>
      ;
      transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    }

    .btn {
      border-width: 2px;
      font-weight: 600;
      font-size: 0.8571em;
      line-height: 1.35em;
      text-transform: uppercase;
      border: none;
      margin: 10px 1px;
      border-radius: 3px;
      padding: 11px 22px;
      cursor: pointer;
      background-color:
        <?php echo $color3 ?>
      ;
      color: #FFFFFF;
      transition: all 150ms linear;
    }

    .btn-danger {
      border-width: 2px;
      font-weight: 600;
      font-size: 0.8571em;
      line-height: 1.35em;
      text-transform: uppercase;
      border: none;
      margin: 10px 1px;
      border-radius: 3px;
      padding: 11px 22px;
      cursor: pointer;
      background-color: red;
      color: #FFFFFF;
      transition: all 150ms linear;
    }

    
  </style>
</head>

<body class="backgroudMainPanel">
  <?php
  $query = "SELECT estado FROM estadocaja WHERE fecha = '" . date("Y-m-d") . "'";
  $exec = mysqli_query($conn2, $query);
  $row = mysqli_fetch_array($exec);

  if (isset($row['estado'])) {
    if ($row['estado'] == 1) {
      include("../menus/menu2.php");
      echo "<div class='main-panel'>";
      include("../menus/navBar.php");
    }
  } else {

    include("../menus/alerta2.php");
    echo "<div class='main-panel'>";
    include("../menus/navBar.php");
  }
  ?>
  <!-- ########## START: MAIN PANEL ########## -->
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="backgroundMainCard" id="mainview">
          <div id="maincontroller">
            <div class="img-container" style="text-align: center;">
              <!-- Block parent element -->
              <img src="../../img/perfil/<?php echo $img; ?>" alt="Logo Rosa Mexicano" width="400px" ;>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <aside class="control-sidebar control-sidebar-dark" style="display: none">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Configuración actual</h5>
      <label>Usuario actual</label>
      <p><span id="email">
          <?php echo $_SESSION["email"] ?>
        </span></h5><br>
        <label> Nombre</label>
        <span id="nombre">
          <?php echo $_SESSION["nombre"] ?>
        </span><br>
        <label> Puesto</label>
        <span id="puesto">
          <?php echo $_SESSION["puesto"] ?>
        </span><br>
        <label>Privilegio 1</label>
        <span id="priv1">
          <?php echo $_SESSION["priv1"]; ?>
        </span><br>
        <label>Privilegio 2</label>
        <span id="priv2">
          <?php echo $_SESSION["priv2"]; ?>
        </span>
        <label>Privilegio 3</label>
        <span id="priv3">
          <?php echo $_SESSION["priv3"]; ?>
        </span><br>
        <label>Privilegio 4</label>
        <span id="priv4">
          <?php echo $_SESSION["priv4"]; ?>
        </span>
        <span id="activeDiv" style="display: none;"></span>

    </div>
  </aside>


  </div><!-- br-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <!--   Core JS Files   -->
  <script src="../../assets/js/core/popper.min.js"></script>
  <script src="../../assets/js/core/bootstrap.min.js"></script>
  <script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Chart JS -->
  <script src="../../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../../assets/js/plugins/bootstrap-notify.js"></script>
  <!--<script src="../../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script> Paper Dashboard DEMO methods, don't include it in your project! -->

  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->


  <script src="../../lib/jquery/jquery.min.js"></script>
  <script src="../../lib/jquery-ui/ui/widgets/datepicker.js"></script>
  <script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="../../lib/moment/min/moment.min.js"></script>
  <script src="../../lib/peity/jquery.peity.min.js"></script>

  <script src="../../js/bracket.js"></script>

  <script src="../../js/main.js"></script>
  <script src="../../js/login.js"></script>
  <script src="../../js/controller.js"></script>
  <script src="../../js/onscan.js"></script>
  <script src="../../js/tools.js"></script>
  <!-- <script src="../../plugins/jquery-tabledit-master/jquery.tabledit.js"></script> -->
  <script type="text/javascript" charset="utf8"
    src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <!--  <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
  <script type="text/javascript" charset="utf8"
    src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" charset="utf8"
    src="https://cdn.datatables.net/buttons/1.5.4/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" charset="utf8"
    src=" https://cdn.datatables.net/buttons/1.5.4/js/buttons.flash.min.js"></script>
  <script type="text/javascript" charset="utf8"
    src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script type="text/javascript" charset="utf8"
    src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script type="text/javascript" charset="utf8"
    src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script type="text/javascript" charset="utf8"
    src="https://cdn.datatables.net/buttons/1.5.4/js/buttons.html5.min.js"></script>
  <script type="text/javascript" charset="utf8"
    src="https://cdn.datatables.net/buttons/1.5.4/js/buttons.print.min.js"></script>
  <script type="text/javascript" charset="utf8"
    src="https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"
    integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jeditable.js/2.0.19/jquery.jeditable.min.js"></script>
  <!-- xEditable
  <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
  <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>-->
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.js"></script>
  <!-- barcode library -->
  <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.0/dist/JsBarcode.all.min.js"></script>
  <!-- jspdf library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"
    integrity="sha512-qZvrmS2ekKPF2mSznTQsxqPgnpkI4DNTlrdUmTzrDgektczlKNRRhy5X5AAOnx5S09ydFYWWNSfcEqDTTHgtNA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
    <script src="https://kit.fontawesome.com/5cc1067d3d.js" crossorigin="anonymous"></script>
</body>

</html>