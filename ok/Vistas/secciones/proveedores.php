<?php
session_start();

$user = $_SESSION["nomDB"];

$nombre = $_SESSION['nombre'];
$email = $_SESSION['email'];
$img = $_SESSION['img'];
$nomEmpresa = $_SESSION["nomDB"];
$plan = $_SESSION["plan"];


include("../../../db/conn2.php");


//CONSULTA PARA SABER EL TOTAL DE PRODUCTOS
$sql = "SELECT * FROM proveedores";

if ($result = $conn->query($sql)) {
  if ($row = mysqli_fetch_array($result)) {
   $resultado=mysqli_num_rows($result);
 }
}

include("../../../db/conn.php");


//DEFINIR VARIABLES $NombrePlan Y $numProuctos

$sql2 = "SELECT * FROM nomPlan where idPlan = $plan";

 if ($result2 = $conn->query($sql2)) {
   if ($row2 = mysqli_fetch_array($result2)) {
    $numProv = $row2['proveedoresMax'];
  }
 }

 $sql3 = "SELECT * FROM nomPlan where idPlan = $plan";

 if ($result3 = $conn->query($sql3)) {
   if ($row3 = mysqli_fetch_array($result3)) {
    $NombrePlan = $row3['nombrePlan'];
  }
 }


 if ($resultado <= $numProv) {
$provFaltante = $numProv - $resultado;
 }else{
  $provFaltante = 'numero de productos exedido';
 } 

 ?>
 <?PHP if($provFaltante == 0)
    {
      $buttomDis = "disabled";
      $alert = "Alcanzaste el Maximo de productos de tu plan ";
      $class = "danger";
    }
    else{

      $alert = "Te quedan $provFaltante  productos de tu plan ";
      $buttomDis = "";
      $class = "primary";

    }
    ?>
 
 
  
 
 
 <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">Inicio</a>
          <span class="breadcrumb-item active">Proveedores</span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="br-pagetitle">
        <i class="icon icon ion-ios-book-outline"></i>
        <div>
          <h4>proveedores</h4>
        </div>
      </div><!-- d-flex -->

      <div class="br-pagebody">


<div class="container-fluid">
  <h4 >Dar de alta proveedores</h4>
   <div class="row">

   <div class="col-12 alert alert-<?php echo $class; ?>" role="alert" style>
<?php echo $alert; 
echo $NombrePlan;
echo " ".$numProv;?>
</div>

           <div class="col-lg-3">
               <div class="form-group">
               <label for="ident">#Identificador:</label>
               <input class = "form-control" type = "text" placeholder = "Identificador" maxlength="15" id = "ident"  style="text-transform:uppercase">
              </div>
              <div class="form-group">
                  <label for="nomProv">Nombre:</label>
                  <input type="text" id="nomProv" class="form-control" placeholder="Nombre del proveedor">
        </div>
         </div>
         <div class="col-lg-3">
            <div class="form-group">
              <label for="telefono">Tel contacto:</label>
              <input type="tel" id="telefono" class="form-control" maxlength="10">
            </div>
            <div class="form-group">
                <label for="email">Email proveedor:</label>
               <input type="email" id="email" class="form-control" placeholder="email@proveedor.com">
            </div>
           </div>
           <div class="col-lg-3">
              <div class="form-group" id = "GradoMostrar">
                  <label for="fechaCrear">Fecha de alta:</label>
                  <input type="date" id="fechaCrear" class="form-control">
              </div>
             <div class="form-group">
                  <label for="mensualidad">Cobro mensual</label>
                  <input class = "form-control" type = "number" placeholder = "Mensualidad" id = "mensualidad"  style="text-transform:uppercase">
              </div>
          </div>
          <div class = "col-lg-3">
              <div class="form-group">
               <label for="ciudad">Ciudad/Municipio:</label>
               <input class = "form-control" type = "text" placeholder = "ciudad" id = "ciudad">
         </div>
         <div class="form-group">
               <label for="bancaria">Cuenta bancaria</label>
               <input class = "form-control" type = "text" placeholder = "# Cuenta" id = "bancaria">
         </div>
           <div class="form-group">
               <label for="sucursal">Banco</label>
               <input class = "form-control" type = "text" placeholder = "Banco" id = "sucursal">
         </div>
          </div>

   </div>

   <div class="row">
         <button type="button" id = "altaProveedor" class="btn btn-success" <?php echo $buttomDis ?>>Alta de proveedor</button>
         <button type="button" id = "consultaProveedor" class="btn btn-default">Consulta proveedores</button>
         <button type="button" id = "updtProveedor" class="btn btn-primary">Actualizar proveedor</button>
         <button type="button" id = "delProveedor" class="btn btn-danger">Eliminar proveedor</button>

   </div>
       <div class="row">
            <div id = "tablaCuentas" class="table-responsive">
                    <table class="table tblpol" id = "provTable">

                    <tfoot>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                      <th></th>
                                      <th></th>
                                      <th></th>
                                      <th></th>

                                </tr>
                            </tfoot>
                </table>
            </div>
      </div>  <!-- /.row -->
   </div><!-- /.container-fluid -->
 <script src="../../js/altaProveedor.js"></script>

      </div><!-- br-pagebody -->

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->