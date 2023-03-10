 <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">Inicio</a>
          <span class="breadcrumb-item active">Reportes</span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="br-pagetitle">
        <i class="icon icon ion-ios-book-outline"></i>
        <div>
          <h4>reportes</h4>
        </div>
      </div><!-- d-flex -->

      <div class="br-pagebody">

<style type="text/css">
  tfoot input {
    width: 100%;
  }
</style>
<!-- Modal reporte desglosado por marcas -->
<div class="modal fade" id="desglosepormarca" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Desglose por marca</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div id="desglosemarca" class="table-responsive">
            <table class="table tblpol" id="tabladesglose">

              <tfoot>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th id="vnt"></th>
                  <th id="pags"></th>
                  <th id="descs"></th>

                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="cajaguardar">Guardar</button>

      </div>
    </div>
  </div>
</div>
<!-- Vista web -->
<div class="container-fluid">
  <h4>Reportes</h4>
  <div class="row">
    <div class="col-lg-3">
      <div class="form-group">
        <label>Tipo de reporte</label>
        <select class="form-control" id="reporteTipo">
          <option value="1">Caja</option>
          <option value="2">Productos</option>
          <option value="3">Inventario</option>
          <option value="4">Entradas</option>
          <option value="5">Caja condensado</option>
          <option value="6">Cobros de marcas</option>
          <option value="7">Productos por marcas</option>
        </select><br>
        <button id="generarRep1" class="btn btn-success">Generar</button>
      </div>
    </div>
    <div class="col-lg-3" id="fecUni">
      <label>Fecha</label>
      <input type="date" id="fechaEsp" class="form-control"><br>

    </div>
    <div class="col-lg-3" id="fecdos">
      <label id="fechaLabel1">Fecha Inicial</label>
      <input type="date" id="fechaini" class="form-control">
      <label id="fechaLabel2">Fecha Final</label>
      <input type="date" id="fechafin" class="form-control"><br>
    </div>

  </div>
  <div class="row">

    <div id="tablaReportes1" class="table-responsive">
      <table class="table tblpol" id="reportesTable1">

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
  </div> <!-- /.row -->
  <div class="row">
    <div id="tablaReportes2" class="table-responsive">
      <table class="table tblpol" id="prodsTable">

        <tfoot>
          <tr>

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
  </div> <!-- /.row -->
  <div class="row">
    <div class="col-lg-3" style="display: none" id="updtProds">
      <div class="form-group">
        <label for="nomProv">Producto:</label>
        <input type="text" id="nomProd" class="form-control" placeholder="ID del producto">
      </div>
      <div class="form-group" id="GradoMostrar">
        <label for="fechaCrear">Nueva cantidad:</label>
        <input type="number" id="nCant" class="form-control">
      </div>
      <input type="button" id="actProd" class="btn btn-default" value="Actualizar">

    </div><br>
    <div class="col-lg-3" style="display: none" id="qrCreator">
      <label>Generar QR de producto</label>
      <select name="sizeCode" id="sizeCode" class="form-control">
        <option value="12">Chico</option>
        <option value="10">Medio</option>
        <option value="8">Grande</option>
        <option value="1">Unico</option>
      </select>
      <button type="button" id="generatePdf" class="btn btn-success">Generar PDF</button><br>
      <input type="checkbox" name="precioCB" id="precioCB">Incluir precio
    </div>
    <div id="qrimage">
      <svg id="codebarproduct"></svg>
    </div>

    <div id="tablaReportes3" class="table-responsive">
      <table class="table tblpol" id="inventario">

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

          </tr>
        </tfoot>
      </table>
    </div>
  </div> <!-- /.row -->
  <div class="row">
    <div id="tablaReportes4" class="table-responsive">
      <table class="table tblpol" id="entradasInv">

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


          </tr>
        </tfoot>
      </table>
    </div>
  </div> <!-- /.row -->
  <div class="row">
    <div id="tablaReportes5" class="table-responsive">
      <table class="table tblpol" id="reportecajanodesglose">

        <tfoot>
          <tr>
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
  </div> <!-- /.row -->
  <div class="row">
    <div id="tablaReportes6" class="table-responsive">
      <table class="table tblpol" id="cobrosmimarcatable2">

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
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
  <div class="row">
    <div id="tablaReportes7" class="table-responsive" style="display:none">
      <select id="proveedoresProductos" class="form-control" style="width:25%">
      </select>
      <input type="button" class="btn btn-success" value="Cargar proveedores" id="cargarProveedores"><br>
      <h3 id="marcaelegida"></h3>
      <table class="table tblpol" id="prodsxmarca">

        <tfoot>
          <tr>
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
  </div>
</div>

</div><!-- /.container-fluid -->
<script src="../../js/generarReportes.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    var x = $("#puesto").html();
    if (x == 1 || x == 2) {
      $("#reporteTipo option[value='5']").attr('disabled', false);
      $("#reporteTipo option[value='6']").attr('disabled', false);
      $("#reporteTipo option[value='7']").attr('disabled', false);
    } else {
      $("#reporteTipo option[value='5']").attr('disabled', true);
      $("#reporteTipo option[value='6']").attr('disabled', true);
      $("#reporteTipo option[value='7']").attr('disabled', true);
    }

  });
</script>
      </div><!-- br-pagebody -->

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->