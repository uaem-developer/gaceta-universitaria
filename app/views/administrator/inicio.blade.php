
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="http://www.uaem.mx/favicon.ico" type="image/vnd.microsoft.icon" />
        <title>UNIVERSIDAD AUTONOMA DEL ESTADO DE MORELOS</title>

        <link href="{{ asset('assets/admin/css/style.default.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/admin/css/style.inverse.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/admin/css/custom.css') }}" rel="stylesheet">


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="{{ asset('assets/admin/js/html5shiv.js')}}"></script>
        <script src="{{ asset('assets/admin/js/respond.min.js')}}"></script>
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
                          <h4 class="panel-title">Iniciar Sesión</h4>
						</div><!-- panel-heading -->


								<div class="tab-pane" id="tab1">

                                    {{ Form::open(['route' => 'login', 'method' => 'POST', 'role' => 'form', 'class' => '']) }}


                                        @if (Session::has('login_error'))
                                          <small class="label label-danger">Sesión no valida</small>
                                        @endif

                                        <div class="form-group">
                                          <label class="col-sm-4 control-label">E-mail</label>
                                          <div class="col-sm-8">
                                            {{ Form::email('email', null, ['class' => 'form-control "', 'placeholder' => 'E-mail']) }}
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="col-sm-4 control-label">Password</label>
                                          <div class="col-sm-8">
                                             {{ Form::password('password', ['class' => 'form-control pword', 'placeholder' => 'Password']) }}
                                          </div>
                                        </div>

                                        <button type="submit" name="iniciarsesion" id="iniciarsesion" class="btn btn-final pull-right" >Iniciar Sesión</button><br/>
                                        <a href="" data-toggle="modal" data-target=".bs-example-modal-lg">Registrarse</a>

                                    {{ Form::close() }}


							</div><!-- tab-content -->

					</div><!-- panel-body -->
				</div>
			</div><!-- row -->

		</div><!-- sigin -->
        <!--modal-->
          <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                      <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
                      <h4 class="modal-title">Registrate </h4>
                  </div>

                  {{ Form::open(['route' => 'register', 'method' => 'POST', 'role' => 'form', 'novalidate']) }}

                    <div class="form-group">
                    {{ Field::text('full_name') }}

                    {{ Field::email('email') }}

                    {{ Field::password('password') }}

                    {{ Field::password('password_confirmation', ['placeholder' => 'Repite tu clave']) }}
                    </div>
                    <div class="modal-footer">

                      <input type="submit" value="Registrar" class="btn btn-final pull-right">

                    </div>
                  {{ Form::close() }}

              </div>

            </div>
          </div><!--modal-->



<script src="{{ asset('assets/admin/js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery-ui-1.10.3.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/modernizr.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/toggles.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/retina.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery.cookies.js') }}"></script>

<script src="{{ asset('assets/admin/js/jquery.maskedinput.min.js') }}"></script>

<script src="{{ asset('assets/admin/js/chosen.jquery.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/custom.js') }}"></script>
<script src="{{ asset('assets/admin/js/bootstrap-wizard.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/contrasenialogin.js') }}"></script>



  </body>
</html>
