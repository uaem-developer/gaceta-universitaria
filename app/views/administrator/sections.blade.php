
@extends('administrator/layout')

@section('css')
@stop

@section('pageheader')

        <h2><i class="fa fa-check-square-o"></i> Mis trámites</h2>
        <div class="breadcrumb-wrapper">
            <span class="label">Usted se encuentra en:</span>
            <ol class="breadcrumb">
                <li><a href="{{ URL::to('frontend/rontend/perfil') }}">Inicio</a></li>
                <li class="active">Mis trámites</li>
            </ol>
        </div>
@stop


@section('content')

         <div class="panel panel-default">
            <div class="panel-body">
                <div class="table-responsive">
                  <table class="table mb30">
                    <thead>
                      <tr>
                        <th>Folio</th>
                        <th>Fecha</th>
                        <th>Trámite</th>
                        <th>Propiedad</th>
                        <th>Status</th>
                        <th>Acción</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td>251-9880-07</td>
                        <td>2014-10-02</td>
                        <td>Cambio de Uso de Suelo, Densidad, Altura.</td>
                        <td>Casa</td>
                        <td>En revisión</td>
                        <td><a href="{{ URL::to('frontend/cambiousodesuelotest') }}">Consultar</a></td>
                      </tr>

                      <tr>
                        <td>101-0080-10</td>
                        <td>2014-09-20</td>
                        <td>Licencia de Uso de Suelo</td>
                        <td>Empresa</td>
                        <td>Pago pendiente</td>
                        <td><a href="{{ URL::to('frontend/licusodesuelo') }}">Consultar</a></td>
                      </tr>

                      <tr>
                        <td>279-098-09</td>
                        <td>2014-08-29</td>
                        <td>Apertura de Vía</td>
                        <td>Empresa</td>
                        <td>Aceptado</td>
                        <td><a href="{{ URL::to('frontend/aperturaviapublica') }}">Consultar</a></td>
                      </tr>

                    </tbody>
                  </table>
                </div><!-- table-responsive -->
            </div><!--Panel Body-->

            <div class="panel-footer ">
              <form action="">

                <input type="checkbox" name="notif" value="notif"> Notificarme en mi correo de cualquier cambio de status.<br><br>
                <button class="btn btn-final ">Guardar</button>
              </form>

            </div><!-- panel-footer -->
        </div>

@stop

@section('script')

@stop
