<!--
		Formulario Datos Personales:
	text 		Nombre: 		nombre
	text		A. Paterno: apaterno
	text 		A. Materno:	amaterno
	text 		Telefono:		telefono


	text 		Clave Cat.	clavecatastral
	text		Dirección		direccion
	text		Entre Calle	calle1
	text 		Y Calle		  calle2

	*pendiente* fotografía, form y mapa
-->

@extends('frontend/layout')

@section('css')
@stop

@section('pageheader')
        <h2><i class="fa fa-user"></i> Configuración </h2>
        <div class="breadcrumb-wrapper">
            <span class="label">Usted se encuentra en:</span>
            <ol class="breadcrumb">
                <li><a href="{{ URL::to('frontend/perfil') }} ">Inicio</a></li>
                <li class="active">Configuración</li>
            </ol>
        </div>
@stop


@section('content')





        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Cambiar Contraseña</h4>
          </div><!-- panel-heading -->
          <div class="panel-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Contraseña Anterior:</label>
              <div class="col-sm-10">
                <input type="password" name="contraseniaAnterior" id="contraseniaAnterior" class="form-control" placeholder="Contraseña Anterior" />
              </div>
            </div>

            <div class="form-group" id="gContrasenia">
              <label class="col-sm-2 control-label">Nueva Contraseña:</label>
              <div class="col-sm-10">
                <input type="password" name="contraseniaRegistro" id="contraseniaRegistro" title="Tu contraseña debe contenter letras, números y símbolos." data-toggle="tooltip" data-trigger="hover" class="form-control tooltips" placeholder="Nueva Contraseña" />
              </div>
            </div>

              <div class="form-group" id="gContrasenia2">
                <label class="col-sm-2 control-label">Confirmar Nueva Contraseña:</label>
                <div class="col-sm-10">
                  <input type="password" name="contraseniaRegistro2" id="contraseniaRegistro2" class="form-control" placeholder="Nueva Contraseña" onkeyup="validarIgual()"/>
                </div>
              </div>


          </div><!-- panel-body -->
          <div class="panel-footer">
             <button class="btn btn-final ">Guardar</button>
          </div>
        </div><!-- panel -->



@stop




@section('script')
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="{{ asset('fassets/js/gmaps.js') }}"></script>
<script src="{{ asset('fassets/js/bootstrap-fileupload.min.js') }}"></script>
<script src="{{ asset('fassets/js/contrasenialogin.js') }}"></script>


<script>

</script>
@stop
