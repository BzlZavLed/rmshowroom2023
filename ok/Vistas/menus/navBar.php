<?php
$nombre = $_SESSION["nombre"];
$email = $_SESSION["email"];
$img = $_SESSION["img"];
$nomEmpresa = $_SESSION["nomEmpresa"];
?>
<!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>



      </div><!-- br-header-left -->
      <div class="br-header-right">
        <nav class="nav">
       <span class = "content-desktop" id = "btn1caja" >
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cajaModal" id="modal1">Abrir/Cerrar caja</button>
        </span>
        <div> <spam>______</spam></div>
      <span class = "content-desktop" id = "btn2sal">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#salidasModal" id="modal1">Salidas de caja</button>
      </span>


          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name hidden-md-down"><?php echo $nombre; ?></span>
              <img src="../../img/perfil/<?php echo $img;  ?>" class="wd-32 rounded-circle" alt="">
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-250">
              <div class="tx-center">
                <a href=""><img src="../../img/perfil/<?php echo $img;  ?>" class="wd-80 rounded-circle" alt=""></a>
                <h6 class="logged-fullname"> <?php echo $nombre; ?> </h6>
                <p><?php echo $email; ?></p>
              </div>
              <hr>

              <hr>
              <ul class="list-unstyled user-profile-nav">
                <li><a href="../secciones/config.php"><i class="icon ion-ios-person"></i> Editar perfil</a></li>
                <li><a href="../../db/conexiones/cerrarSesion.php"><i class="icon ion-power"></i> cerrar sesion</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->


        </nav>

      </div><!-- br-header-right -->
    </div><!-- br-header -->
 <!-- Modal -->

  <div class="modal fade" id="cajaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Abrir/cerrar caja</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
          <div class="col-lg-5">
            <label>Fecha</label>
            <input type="date" id="fechaCaja" class="form-control">
            <label>Acción</label>
            <select class="form-control" id="accioncaja">
              <option value="1">Abrir día</option>
              <option value="2">Cerrar día</option>
            </select>
            <label>Saldo</label>
            <input type="number" id="saldocaja" class="form-control">
          </div>
          </div><br>
          <h5>Consulta</h5>
           <input type="date" class="form-control"  id="consultacaja"><br>
          <div class="row">

                      <div id = "cortecajadiv" class="table-responsive">
                              <table class="table tblpol" id = "cortecaja">

                              <tfoot>
                                          <tr>
                                              <th></th>
                                              <th></th>
                                              <th></th>
                                              <th></th>
                                              <th></th>


                                         </tr>
                                      </tfoot>
                          </table>
                      </div>

                      <div id="notaaper" style="display: none">
                      <table class="table">
                        <tr>
                          <th scope="col">Fecha</th>
                          <th scope="col">Estado</th>
                          <th scope="col">Saldo</th>
                          <th scope="col">Sistema</th>
                          <th scope="col">Usuario</th>
                        </tr>
                        <tr>
                          <td id="fecha0"></td>
                          <td id="estado0"></td>
                          <td id="saldo0"></td>
                          <td id="saldosistema0"></td>
                          <td id="usuario0"></td>
                        </tr>
                        <tr>
                          <td id = "fecha1"></td>
                          <td id = "estado1"></td>
                          <td id = "saldo1"></td>
                          <td id = "saldosistema1"></td>
                          <td id = "usuario1"></td>
                        </tr>
                      </table>
                      </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" id="cajaguardar">Guardar</button>
          <button type="button" class="btn btn-default" id="cajaconsulta">Consultar</button>
          <button type="button" class="btn btn-default" id="impNota">Imprimir</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="salidasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Egresos caja</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col-lg-5">
            <label>ID</label>
            <p id = "idEgreso"></p>
            <label>Fecha</label>
            <input type="date" id="fechaEgreso" class="form-control">
            <label>Concepto</label>
            <input type="text" id="concEgreso" class="form-control"><br>
            <div class="form-group">
                        <input class="form-control" type="text" name="key" id="key" placeholder="Proveedor..." autocomplete="false">
                                <span class="input-group-btn">
                                </span>
                                <div id="suggestions"></div>
                   </div>
            <label>Monto</label>
            <input type="number" id="saldoEgreso" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="cerrarEgreso">Cerrar</button>
          <button type="button" class="btn btn-primary" id="egresosguardar">Guardar</button>
        </div>

      </div>
    </div>
  </div>
