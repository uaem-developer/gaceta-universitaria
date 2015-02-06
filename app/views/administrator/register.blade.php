
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
<link rel="shortcut icon" href="http://www.uaem.mx/favicon.ico" type="image/vnd.microsoft.icon" />
        <title>UNIVERSIDAD AUTONOMA DEL ESTADO DE MORELOS</title>

        <link href="{{ asset('assets/css/style.default.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.inverse.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">




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

    	<div class="signuppanel">

			<div class="row">


				<div class="col-md-12">
					<div class="panel panel-default">

						<div class="panel-heading centrar" >
                          <img src="http://multimedia.uaem.mx:8080/uaem/assets/images/logo-uaem.jpg" class=" clogin" style="margin-bottom:10px;" >
                          <h4 class="panel-title">Registrarse</h4>
						</div><!-- panel-heading -->


								<div class="tab-pane" id="tab1">

                                    {{ Form::open(['route' => 'register', 'method' => 'POST', 'role' => 'form', 'novalidate']) }}

                                    {{ Field::text('full_name') }}

                                    {{ Field::email('email') }}

                                    {{ Field::password('password') }}

                                    {{ Field::password('password_confirmation', ['placeholder' => 'Repite tu clave']) }}

                                    <p>
                                        <input type="submit" value="Registrar" class="btn btn-final pull-right">
                                    </p>

                                    {{ Form::close() }}

							</div><!-- tab-content -->

					</div><!-- panel-body -->
				</div>
			</div><!-- row -->

		</div><!-- sigin -->



<script src="{{ asset('assets/js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui-1.10.3.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('assets/js/toggles.min.js') }}"></script>
<script src="{{ asset('assets/js/retina.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.cookies.js') }}"></script>

<script src="{{ asset('assets/js/jquery.maskedinput.min.js') }}"></script>

<script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-wizard.min.js') }}"></script>
<script src="{{ asset('assets/js/contrasenialogin.js') }}"></script>







  </body>
</html>
