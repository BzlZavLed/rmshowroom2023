


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

    <title>Recuperar Contraseña</title>

    <!-- vendor css -->
    <link href="../../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../../css/bracket.css">
    <style type="text/css">
    .ocultar {display: none;}
    .mostrar {display: block;   }
</style>
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Rosa <span class="tx-info">Mexicano</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-60">Recupera tu contraseña</div>
<form id="recovery" action="../../db/consultas/change_pass.php" method="POST" enctype="multipart/form-data"/>
        <div class="form-group">
          <input type="password" name="pass1" id="pass1" class="form-control" placeholder="Ingresa tu contraseña">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" name="pass2" id="pass2" class="form-control" placeholder="Confirma tu contraseña" onkeyup="verificarPasswords()">
        </div><!-- form-group -->
          <!-- Mensajes de Verificación -->
          <input type="hidden" name="id" id="id" value="<?php echo $_GET['id'];?>">
          <div id="error" class="alert alert-danger ocultar" role="alert">
                                    Las Contraseñas no coinciden, vuelve a intentar !
                                </div>
                                <div id="ok" class="alert alert-success ocultar" role="alert">
                                    Las Contraseñas coinciden !
                                </div>
                                <!-- Fin Mensajes de Verificación -->
        <button type="submit" id="forward" name="forward" class="btn btn-info btn-block">Recuperar contraseña</button>



        <div class="mg-t-60 tx-center">ya tienes cuenta? <a href="index.html" class="tx-info">Inicia Sesion</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->
    </form>

    <script src="../../lib/jquery/jquery.min.js"></script>
    <script src="../../lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/passVal.js"></script>

  </body>
</html>
