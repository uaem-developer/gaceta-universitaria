<!--
		Reestablecer:
	form
	text 		Contraseña		contrasenia
	text			Contraseña		contrasenia2

  *falta form y botón"
-->


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="{{ asset('fassets/images/favicon.png') }}" type="image/png">
        <title>Cuautitlán</title>

        <link href="{{ asset('fassets/css/style.default.css') }}" rel="stylesheet">
        <link href="{{ asset('fassets/css/style.inverse.css') }}" rel="stylesheet">
        <link href="{{ asset('fassets/css/custom.css') }}" rel="stylesheet">


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="gris">
        <!-- Preloader -->
    <div id="preloader">
            <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
        </div>

      <div class="signinpanel">

      <div class="row">

        <div class="col-sm-14">

          <div class="panel panel-default ">

            <div class="panel-heading">
              <h4 class="panel-title"> Restablecer Contraseña</h4>
              <span>Ingresa nueva contraseña</span>
            </div><!-- panel-heading -->

            <div class="panel-body">
              <div class="form-group">
                <label class="col-sm-4 control-label">Contraseña</label>
                <div class="col-sm-8">
                <input type="password" name="contrasenia" id="contrasenia" class="form-control" placeholder="Contraseña" />
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label">Nueva Contraseña</label>
                <div class="col-sm-8">
                <input type="password" id="contrasenia" name="contrasenia2" class="form-control" placeholder="Confirmar Contraseña" />
                </div>
              </div>
            </div><!-- panel-body -->

            <div class="panel-footer rightalign">
              <button class="btn btn-final ">Restablecer</button><br/>
            </div><!-- panel-footer -->
          </div><!-- panel -->
        </div><!-- col-sm-5 -->




      </div><!-- row -->

    </div><!-- sigin -->






<script src="{{ asset('fassets/js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ asset('fassets/js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('fassets/js/jquery-ui-1.10.3.min.js') }}"></script>
<script src="{{ asset('fassets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('fassets/js/modernizr.min.js') }}"></script>
<script src="{{ asset('fassets/js/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('fassets/js/toggles.min.js') }}"></script>
<script src="{{ asset('fassets/js/retina.min.js') }}"></script>
<script src="{{ asset('fassets/js/jquery.cookies.js') }}"></script>

<script src="{{ asset('fassets/js/jquery.autogrow-textarea.js') }}"></script>
<script src="{{ asset('fassets/js/jquery.tagsinput.min.js') }}"></script>
<script src="{{ asset('fassets/js/chosen.jquery.min.js') }}"></script>
<script src="{{ asset('fassets/js/colorpicker.js') }}"></script>

<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="{{ asset('fassets/js/gmaps.js') }}"></script>

<script src="{{ asset('fassets/js/custom.js') }}"></script>
<script src="{{ asset('fassets/js/bootstrap-wizard.min.js') }}"></script>







  </body>
</html>
