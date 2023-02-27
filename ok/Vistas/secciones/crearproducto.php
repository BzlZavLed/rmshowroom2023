 <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">Inicio</a>
          <span class="breadcrumb-item active">Crear producto</span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="br-pagetitle">
        <i class="icon icon ion-ios-book-outline"></i>
        <div>
          <h4>Crear produto</h4>
        </div>
      </div><!-- d-flex -->

      <div class="br-pagebody">


<?php
session_start();

$user = $_SESSION["nomDB"];



$dir = $_SERVER['DOCUMENT_ROOT'].'/carpeta sin título/versiones/rmshowroom2023';
define("dir",  $dir);


$nombre = $_SESSION['nombre'];
$email = $_SESSION['email'];
$img = $_SESSION['img'];
$nomEmpresa = $_SESSION["nomDB"];
$plan = $_SESSION["plan"];


include("../../../db/conn2.php");


//CONSULTA PARA SABER EL TOTAL DE PRODUCTOS
$sql = "SELECT * FROM producto";

if ($result = $conn3->query($sql)) {
  if ($row = mysqli_fetch_array($result)) {
   $resultado=mysqli_num_rows($result);
 }
}

include("../../../db/conn.php");


//DEFINIR VARIABLES $NombrePlan Y $numProuctos

$sql2 = "SELECT * FROM nomPlan where idPlan = $plan";

 if ($result2 = $conn->query($sql2)) {
   if ($row2 = mysqli_fetch_array($result2)) {
    $numProuctos = $row2['productosMax'];
  }
 }

 $sql3 = "SELECT * FROM nomPlan where idPlan = $plan";

 if ($result3 = $conn->query($sql3)) {
   if ($row3 = mysqli_fetch_array($result3)) {
    $NombrePlan = $row3['nombrePlan'];
  }
 }


 if ($resultado <= $numProuctos) {
$prodFaltante = $numProuctos - $resultado;
 }else{
  $prodFaltante = 'numero de productos exedido';
 } */

 ?>
 <?PHP if($prodFaltante == 0)
    {
      $buttomDis = "disabled";
      $alert = "Alcanzaste el Maximo de productos de tu plan ";
      $class = "danger";
    }
    else{

      $alert = "Te quedan $prodFaltante  productos de tu plan ";
      $buttomDis = "";
      $class = "primary";

    }
    ?>
<style type="text/css">
  tfoot input {
    width: 100%;
  }
</style>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-xl">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Revisar ingreso</h4>
      </div>
      <div class="modal-body" id="prodCred">
        <label>Identificador asignado</label><br>
        <span id="ida"></span><br>
        <label>Nombre de producto</label><br>
        <span id="nom"></span><br>
        <label>Descripción</label><br>
        <span id="desc"></span><br>
        <label>Fecha de creación</label><br>
        <span id="fec"></span><br>
        <label>Proveedor</label><br>
        <span id="pro"></span><br>
        <label>Presentación de venta</label><br>
        <span id="presv"></span><br>
        <label>Presentación de ingreso</label><br>
        <span id="presi"></span><br>
        <label>Cantidad por presentación venta</label><br>
        <span id="cpresv"></span><br>
        <label>Cantidad por presentación ingreso</label><br>
        <span id="cpresi"></span><br>
        <label>Precio de venta</label><br>
        <span id="preciov"></span><br>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btnPrint">Imprimir</button>
        <button type="button" class="btn btn-default" id="closeMododal">Cerrar</button>

      </div>
    </div>

  </div>
</div>
<div class="alert alert-<?php echo $class; ?>" role="alert">
<?php echo $alert; 
echo $NombrePlan;
echo " ".$numProuctos;?>
</div>
<div class="container-fluid">
  <h4>Crear producto</h4>
  <div class="row">
    <div class="col-lg-3">
      <div class="form-group">
        <label for="iident">Identificador interno</label>
        <input type="number" id="iident" placeholder="Identificador interno" class="form-control">
      </div>
      <div class="form-group">
        <label for="pName">Nombre de producto</label>
        <input type="text" id="pName" class="form-control" placeholder="Nombre del producto">
      </div>
      <div class="form-group">
        <label for="pDesc">Descripción</label>
        <input type="text" id="pDesc" class="form-control" placeholder="Descripción del producto">
      </div>

    </div>
    <div class="col-lg-3">
      <div class="form-group">
        <label for="pProv">Proveedor</label>
        <select id="pProv" class="form-control">
        </select>
        <button class="btn btn-default" id="loadProvs">Cargar</button>
      </div>
      <div class="form-group">
        <label for="pFec">Fecha de creación</label>
        <input type="date" id="pfex" class="form-control">
      </div>


    </div>

    <div class="col-lg-3">
      <div class="form-group">
        <label for="precioUni">Precio de venta</label>
        <input type="number" id="precioUni" placeholder="Precio unitario" class="form-control">
      </div>
      <div class="form-group">
        <label for="precioUni">Cantidad inicial</label>
        <input type="number" id="cantInicial" placeholder="Cantidad inicial" class="form-control">
      </div>

    </div>

   

    <div class="col-sm-3">
        <button type="button" id="updtProd" class="btn btn-default">Actualizar Producto</button>
        <button type="button" id="cons" class="btn btn-default">Consulta</button><br><br>
        <button type="button" id="ingresar" class="btn btn-primary" <?php echo $buttomDis ?> >Crear producto</button>
        <button type="button" id="delProd" class="btn btn-danger">Eliminar Producto</button><br><br>
      </div>
    <hr>



  </div>
  <div class="row">
    <div class="col-sm-6">
      <label>Tamaño de código de barras</label>
      <select name="sizeCode" id="sizeCode" class="form-control">
        <option value="12">Chico</option>
        <option value="10">Medio</option>
        <option value="8">Grande</option>
        <option value="1" selected>Unico</option>
      </select>
      <input type="checkbox" name="precioCB" id="precioCB">Incluir precio <br>
      <button type="button" id="generatePdf" class="btn btn-success" style="display:none">Generar PDF</button>

    </div>
    <div class="col-sm-3">
      <svg id="codebarproduct"></svg>
    </div>
  </div>
  <div class="row">
    <div id="tablaCuentas" class="table-responsive">
      <table class="table tblpol" id="prodsTable">

      </table>
    </div>
  </div> <!-- /.row -->
  <div class="row">
    <div class="col-md-4">
      <label>Subir archivo de productos</label>
      <input type="file" name="employee_file" id="employee_file" style="margin-top:15px;" />
      <input type="button" name="upload" id="upload" value="Subir archivo" style="margin-top:10px;"
        class="btn btn-info" />
    </div>
  </div> <!-- /.row -->
</div>

</div>
<script src="../../js/crearProducto.js"></script>
      </div><!-- br-pagebody -->

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->