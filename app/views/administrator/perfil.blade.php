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

@extends('administrator/layout')

@section('css')
@stop

@section('pageheader')
        <h2><i class="fa fa-user"></i> Perfil <span>Mi perfil</span></h2>
        <div class="breadcrumb-wrapper">
            <span class="label">Usted se encuentra en:</span>
            <ol class="breadcrumb">
                <li><a href="{{ URL::to('frontend/perfil') }} ">Inicio</a></li>
                <li class="active">Perfil</li>
            </ol>
        </div>
@stop


@section('content')

        <div class="row">
          <div class="col-sm-2">
            <div class="panel panel-default ">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="" id="selectphoto" class="tooltips" data-toggle="tooltip" title="Foto"><i class="glyphicon glyphicon-camera"></i></a>
                  <a href="" id="editphoto" class="tooltips" data-toggle="tooltip" title="Editar"><i class="glyphicon glyphicon-pencil"></i></a>
                </div><!-- panel-btns -->
                <h4 class="panel-title">Foto</h4>
              </div><!-- panel-heading -->
              <div class="panel-body">
                <div class="cover"><img src="{{ asset('fassets/images/profileuser.jpg') }}" class="stretchtofit"></div>
              </div><!-- panel-body -->
            </div><!-- panel -->
          </div><!-- col-sm-6 -->

          <div class="col-sm-10">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="" id="editinfo" class="tooltips" data-toggle="tooltip" title="Editar"><i class="glyphicon glyphicon-pencil"></i></a>
                </div><!-- panel-btns -->
                <h4 class="panel-title">Datos Personales</h4>
              </div><!-- panel-heading -->
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nombre:</label>
                  <div class="col-sm-10">
                    <input type="text" name="nombre" id="nombre" class="form-control" value="Carlos"/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Apellido Paterno:</label>
                  <div class="col-sm-10">
                    <input type="text" name="apaterno" id="apaterno" class="form-control" value="Domínguez"/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Apellido Materno:</label>
                  <div class="col-sm-10">
                    <input type="text" name="amaterno" id="amaterno" class="form-control" value="Martínez" />
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Teléfono:</label>
                  <div class="col-sm-10">
                    <input type="text" name="telefono" id="telefono" class="form-control" value="552 731 8914" />
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Correo Electrónico:</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" id="email" class="form-control" value="carlosdm@gmail.com" />
                  </div>
                </div>






              </div><!-- panel-body -->
            </div><!-- panel -->

          </div><!-- col-sm-6 -->

        </div><!-- row -->



        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="panel-btns">
              <a href="" id="editaddress" class="tooltips" data-toggle="tooltip" title="Editar"><i class="glyphicon glyphicon-pencil"></i></a>
            </div><!-- panel-btns -->
            <h4 class="panel-title">Datos del Domicilio</h4>
          </div><!-- panel-heading -->
          <div class="panel-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">Clave Catastral:</label>
              <div class="col-sm-10">
                <input type="text" name="clavecatastral" id="clavecatastral" class="form-control" value="1372393859"/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Dirección:</label>
              <div class="col-sm-10">
                <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Calle, Número." value="Alfonso Reyes, Esq. Venustiano Carranza"/>
              </div>
            </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Entre Calle:</label>
                <div class="col-sm-10">
                  <input type="text" name="calle1" id="calle1" class="form-control" value="Av. 16 de Septiembre"/>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Y calle:</label>
                <div class="col-sm-10">
                  <input type="text" name="calle2" id="calle1" class="form-control" value="Prol. Venustiano Carranza"/>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2">Colonia</label>
                <div class="col-sm-10">
                  <input type="text" name="colonia" id="colonia" class="form-control" placeholder="Colonia" value="Fracc. Sta. María"/>
                </div>
              </div>


              <div class="form-group">
                <label class="col-sm-2">Código Postal</label>
                <div class="col-sm-10">
                  <input type="text" name="codigopostal" id="codigopostal" class="form-control" placeholder="Código Postal" value="54820"/>
                </div>
              </div>


              <div class="form-group">
                <label class="col-sm-2">Estado</label>
                <div class="col-sm-10">
                  <input type="text" name="estado" id="estado" class="form-control" placeholder="Estado" value="Estado de México"/>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2">Municipio</label>
                <div class="col-sm-10">
                  <input type="text" name="municipio" id="municipio" class="form-control" placeholder="Municipio" value="Cuautitlán"/>
                </div>
              </div>




          </div><!-- panel-body -->
        </div><!-- panel -->

        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="panel-btns">
              <a href="" id="editalocal" class="tooltips" data-toggle="tooltip" title="Editar"><i class="glyphicon glyphicon-pencil"></i></a>
            </div><!-- panel-btns -->
            <h4 class="panel-title">Ubicación del domicilio</h4>
          </div><!-- panel-heading -->
          <div class="panel-body">
            <div id="gmap-marker" style="height: 300px"></div>
          </div><!-- panel-body -->
        </div><!-- panel -->


@stop




@section('script')
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="{{ asset('fassets/js/gmaps.js') }}"></script>
<script src="{{ asset('fassets/js/bootstrap-fileupload.min.js') }}"></script>


<script>
  jQuery(document).ready(function(){

    var map_marker = new GMaps({
        div: '#gmap-marker',
        lat: 19.664986,
        lng: -99.179323,

    });

    map_marker.addMarker({
        lat: 19.664986,
        lng: -99.179323,
        click: function(e) {
          alert('Dirección');
        }
    });

  });
</script>
@stop
