<?php 
$plan = $_GET['plan'];
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Potenza - Job Application Form Wizard with Resume upload and Branch feature">
        <meta name="author" content="Ansonika">
        <title>Rosa Mexicano | ShowRoom</title>
        <!-- Favicons-->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
        <!-- GOOGLE WEB FONT -->
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">
        <!-- BASE CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/menu.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/vendors.css" rel="stylesheet">
        <link rel="stylesheet" href="css/sweetalert2.min.css">
        <!-- YOUR CUSTOM CSS -->
        <link href="css/custom.css" rel="stylesheet">
<style type="text/css">
    .ocultar {display: none;}
    .mostrar {display: block;   }
</style>


    </head>
    <body>
        <div id="preloader">
            <div data-loader="circle-side"></div>
        </div>
        <!-- /Preload -->
        <div id="loader_form">
            <div data-loader="circle-side-2"></div>
        </div>
        <!-- /loader_form -->
        <!-- /menu -->
        <div class="container-fluid">
            <div class="row row-height">
                <div class="col-xl-4 col-lg-4 content-left">
                    <div class="content-left-wrapper">
                        <a href="index.html" id="logo"><img src="img/logo.png" alt="" width="45" height="45"></a>
                        <!-- /social -->
                        <div>
                            <figure>
                                <img src="img/info_graphic_1.svg" alt="" class="img-fluid" width="270" height="270">
                            </figure>
                            <h2>ROSA MEXICANO | SHOWROOM</h2>
                            <p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel.</p>
                            <a href="#start" class="btn_1 rounded mobile_btn yellow">Start Now!</a>
                        </div>
                        <div class="copy">© 2022 Potenza</div>
                    </div>
                    <!-- /content-left-wrapper -->
                </div>
                <!-- /content-left -->
                <div class="col-xl-8 col-lg-8 content-right" id="start">
                    <div id="wizard_container">
                        <div id="top-wizard">
                            <span id="location"></span>
                            <div id="progressbar"></div>
                        </div>
                        <!-- /top-wizard -->
                        <form id="Registro" method="post" action="db/registro.php" >
                            <input id="website" name="website" type="text" value="">
                            <!-- Leave for security protection, read docs for details -->
                            <div id="middle-wizard">
                                <div class="step">
                                    <h2 class="section_title">Presentacion</h2>
                                    <h3 class="main_question">Informacion Personal</h3>
                                    <div class="form-group add_top_30">
                                        <label for="name">Nombre</label>
                                        <input type="text" name="name" id="name" class="form-control required" onchange="getVals(this, 'name_field');">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control required" onchange="getVals(this, 'email_field');">
                                        <div id="respuesta"> </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Telefono</label>
                                        <input type="text" name="phone" id="phone" class="form-control required">
                                    </div>
                                    <div class="form-group">
                                        <label for="nomEmpresa">Nombre de la Empresa</label>
                                        <input type="text" name="nomEmpresa" id="nomEmpresa" class="form-control required">
                                    </div>
                                    <div class="form-group add_bottom_30 add_top_20">
                                        <div class="fileupload"></div>
                                    </div>
                                </div>
                                <!-- /step-->
                                <!-- /Start Branch ============================== -->
                                    <div class="step">
                                      
                                    <div class="form-group">
                                        <label for="pass1">Contraseña</label>
                                        <input type="password" name="pass1" id="pass1" class="form-control required">
                                    </div>
                                     <div class="form-group">
                                        <label for="pass2">confirmar Contraseña</label>
                                        <input type="password" name="pass2" id="pass2" class="form-control required" onkeyup="verificarPasswords()">
                                    </div>
                                    <div id="msg"></div>
                                <!-- Mensajes de Verificación -->
                                <div id="error" class="alert alert-danger ocultar" role="alert">
                                    Las Contraseñas no coinciden, vuelve a intentar !
                                </div>
                                <div id="ok" class="alert alert-success ocultar" role="alert">
                                    Las Contraseñas coinciden !
                                </div>
                                <!-- Fin Mensajes de Verificación -->

                                    </div><!-- end step-->
                                <!-- /Work Availability > Freelance-Contract ============================== -->
                                    <!-- /step-->

                                   

                                        <!--pago-->

                                        <div class="step">

                                        <div class="card">

                                            <div class="container">
                                                <div class="row">
                                                  <div class="col-sm">
                                                    <label>color 1</label>
                                                    <input type="color" name="color1" id="color1">
                                                  </div>
                                                  <div class="col-sm">
                                                    <label>color 2</label>
                                                    <input type="color" name="color2" id="color2">
                                                  </div>
                                                  <div class="col-sm">
                                                    <label>color 3</label>
                                                    <input type="color" name="color3" id="color3">
                                                  </div>
                                               
                                                </div>
                                              </div>
                                           
                                              <br />
                                       
                                          </div>

                                        </div>

                                        <div class="step">

                                        <div class="card">

                                            <div class="container">
                                                <div class="row">
                                                <div class="col-sm">
                                                    <label>color 1</label>
                                                   <h3>Metodo de Pago</h3>
                                                </div>
                                                <div class="col-sm">
                                                    Datos para transferencia.
                                                </div>
                                                <div class="col-sm">
                                                    <label>datos de la tarjeta</label>
                                                </div>
                                            
                                                </div>
                                            </div>
                                        
                                            <br />

                                        </div>

                                        </div>


                                <div class="submit step" id="end">
                                    <div class="summary">
                                        <div class="wrapper">
                                            <h3>Gracias por suscribirte <br><span id="name_field"></span>!</h3>
                                            <p>Estamos terminando el proceso de suscribir <strong id="email_field"></strong></p>
                                        </div>
                                        <div class="text-center">
                                            <div class="form-group terms">
                                                <label class="container_check">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#terms-txt">Terminos y condiciones</a>
                                                    <input type="checkbox" name="terms" value="Yes" class="required">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /step last-->
                            </div>
                            <input type="hidden" name="plan" value="<?php echo $plan; ?>">
                            <!-- /middle-wizard -->
                            <div id="bottom-wizard">
                                <button type="button" name="backward" class="backward">Prev</button>
                                <button type="button" id="forward" name="forward" class="forward" disabled>Next</button>
                                <button type="submit" name="process" class="submit">Submit</button>
                            </div>
                            <!-- /bottom-wizard -->
                        </form>
                    </div>
                    <!-- /Wizard container -->
                </div>
                <!-- /content-right-->
            </div>
            <!-- /row-->
        </div>
        <!-- /container-fluid -->
        <div class="cd-overlay-nav">
            <span></span>
        </div>
        <!-- /cd-overlay-nav -->
        <div class="cd-overlay-content">
            <span></span>
        </div>
        <!-- /cd-overlay-content -->
        <!-- /menu button -->
        <!-- Modal terms -->
        <div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="termsLabel">Terminos y condiciones</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                        <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn_1" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- validacion del email en base de datos -->

<script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<!-- script -->
 
<script type="text/javascript">
$("#email").on("focusout", function() {
  var email = $("#email").val(); 
  var validEmail =  /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;

  if(validEmail.test(email) ){

    var dataString = 'email=' + email;

      $.ajax({
          url: 'db/verificarUser.php',
          type: "GET",
          data: dataString,
          dataType: "JSON",

          success: function(datos){
            console.log(datos);
                if( datos.success == 1){

                $("#respuesta").html(datos.message);

                $("input#email").attr('disabled',false); 
                $("#forward").attr('disabled',true); 


                }else{

                $("#respuesta").html(datos.message);

                $("input").attr('disabled',false); 
                $("#forward").attr('disabled',false); 

                    }
                  },
                  error:function(datos){
                    console.log(datos);
                  }
                });
  }
  else{
//		return false;
Swal.fire('Ingresa un correo valido')

  }
          });
          </script>

        <!-- alerta -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="sweetalert2.min.js"></script>
        <!-- COMMON SCRIPTS -->
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/common_scripts.min.js"></script>
        <script src="js/velocity.min.js"></script>
        <script src="js/common_functions.js"></script>
        <script src="js/file-validator.js"></script>
        <!-- Wizard script-->
        <script src="js/func_1.js"></script>
        <!-- validacion de contraseña  -->
        <script src="js/passVal.js"></script>

    </body>
</html>