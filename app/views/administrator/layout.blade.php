<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
        <link rel="shortcut icon" href="http://www.uaem.mx/favicon.ico" type="image/vnd.microsoft.icon" />

      <title>UAEM</title>

      <link href="{{ asset('assets/css/style.default.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/bootstrap-fileupload.min.css') }}" rel="stylesheet">
      @yield('css')



      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="{{ asset('assets/js/html5shiv.js') }}  "></script>
      <script src="{{ asset('assets/js/respond.min.js') }}"></script>
      <![endif]-->
  </head>

  <body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
    </div

    <section>

      <div class="leftpanel">

        <div class="logopanel">
            <h1><img src="http://multimedia.uaem.mx:8080/uaem-only.png" class="clogo" > </h1>
        </div><!-- logopanel -->

        <div class="leftpanelinner">

            <!-- This is only visible to small devices -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media userlogged">
                    <img alt="" src="{{ asset('assets/images/photos/loggeduser.png') }}" class="media-object">
                    <div class="media-body">
                        <h4>Usuario</h4>
                        <span>Cuautitlán</span>
                    </div>
                </div>

                <h5 class="sidebartitle actitle">Cuenta</h5>
                <ul class="nav nav-pills nav-stacked nav-bracket mb30">
                    <li><a href="{{ route('profile') }}"><i class="fa fa-user"></i> <span>Perfil</span></a></li>
                    <li><a href=""><i class="fa fa-question-circle"></i> <span>Ayuda</span></a></li>
                    <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> <span>Cerrar Sesión</span></a></li>
                </ul>
            </div>

            <h5 class="sidebartitle">Navegación</h5>
            <ul class="nav nav-pills nav-stacked nav-bracket">
                <li><a href="{{ route('profile') }}"><i class="fa fa-user"></i> <span>Perfil</span></a></li>
                <li><a data-toggle="modal" data-target=".modaltramites"><i class="fa fa-list-alt"></i> <span>Contenidos</span></a></li>
                <li><a href="{{ route('admin_posts') }}"> <i class="fa fa-check-square-o"></i> <span>Posts</span></a></li>
                <li><a href="{{ route('admin_sections')}}"> <i class="fa fa-home"></i> <span>Secciones</span></a></li>

              </li>
	          </ul>

          </div><!-- leftpanelinner -->

      </div><!-- leftpanel -->

			<div class="mainpanel">

				<div class="headerbar">
					<a class="menutoggle"><i class="fa fa-bars"></i></a>

					<div class="header-right">
						<ul class="headermenu">
							<li>
								<div class="btn-group">
									<button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
										<i class="glyphicon glyphicon-bell"></i>
										<span class="badge">1</span>
									</button>
									<div class="dropdown-menu dropdown-menu-head pull-right">
										<h5 class="title">1 Nuevo Mensaje</h5>
										<ul class="dropdown-list user-list">


											<li class="new"><a href="">Administrador: <i>Trámite #3434: Credencial INE no válida. Favor de volver a subir.</i></a></li>
										</ul>
									</div>
								</div>
							</li>


							<li>
								<div class="btn-group">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
										<img src="{{ asset('fassets/images/photos/loggeduser.png') }}" alt="" />
										Usuario
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu dropdown-menu-usermenu pull-right">
										<li><a href="">       <i class="glyphicon glyphicon-user"></i>          Perfil</a></li>
										<li><a href="">                                       <i class="glyphicon glyphicon-question-sign"></i> Ayuda</a></li>
										<li><a href="">       <i class="glyphicon glyphicon-log-out"></i>       Cerrar Sesión</a></li>
									</ul>
								</div>
							</li>

						</ul>
					</div><!-- header-right -->

				</div><!-- headerbar -->

				<div class="pageheader">
					@yield('pageheader')
				</div>

				<div class="contentpanel">
					  @yield('content')
				</div>


        <footer id="footer">
          <a>Términos y Condiciones</a> | <a>Aviso de Privacidad.</a>
        </footer>

			</div><!-- mainpanel -->
    </section>


    <!--MODALS-->

	<script src="{{ asset('assets/js/jquery-1.10.2.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery-ui-1.10.3.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.cookies.js') }}"></script>
	<script src="{{ asset('assets/js/retina.min.js') }}"></script>
	<script src="{{ asset('assets/js/custom.js') }}"></script>
	<script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.sparkline.min.js') }}"></script>
	<script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>

    <script type="text/javascript">
        $("select").chosen();
    </script>
  @yield('script')


  </body>
</html>
