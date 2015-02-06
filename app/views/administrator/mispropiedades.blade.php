@extends('frontend/layout')

@section('css')
@stop

@section('pageheader')
        <h2><i class="fa fa-list-alt"></i>Mis Propiedades</h2>
        <div class="breadcrumb-wrapper">
            <span class="label">Usted se encuentra en:</span>
            <ol class="breadcrumb">
                <li><a href="{{ URL::to('frontend/rontend/perfil') }}">Inicio</a></li>
                <li class="active">Mis Propiedades</li>
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
                        <th>#</th>
                        <th>Alias</th>
                        <th>Clave Catastral</th>
                        <th>Dirección</th>
                        <th>Entre Calle</th>
                        <th>Y Calle</th>
                        <th>Colonia</th>
                        <th>Código Postal</th>
                        <th>Superficie del Predio (m<sup>2</sup>)</th>
                        <th>Superficie de Construcción Existente (m<sup>2</sup>)</th>
                        <th style="color:white">----------</th>
                        <th style="color:white">----------</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Casa</td>
                        <td>1372393859</td>
                        <td>Alfonso Reyes, Esq. Venustiano Carranza</td>
                        <td>Av. 16 de Septiembre</td>
                        <td>Prol. Venustiano Carranza</td>
                        <td>Fracc. Sta. María</td>
                        <td>54820</td>
                        <td>800</td>
                        <td>600</td>

                        <td class="table-action">
                          <a href="{{ URL::to('frontend/mistramites') }}" title="Trámites o Servicios en Esta Propiedad" data-toggle="tooltip" data-trigger="hover" class="tooltips"><i class="fa fa-list-alt"></i></a>
                          <a href="{{ URL::to('frontend/documentos') }}" title="Documentos Cargados de Esta Propiedad" data-toggle="tooltip" data-trigger="hover" class="tooltips delete-row"><i class="fa fa-archive"></i></a>
                        </td>

                        <td class="table-action">
                          <a href="#"  data-target=".bs-example-modal-sm" title="Editar propiedad" data-toggle="modal" data-trigger="hover" class="tooltips"><i class="fa fa-pencil"></i></a>
                          <a href="" title="Quitar de mis propiedades " data-toggle="modal" data-trigger="hover" class="tooltips delete-row"><i class="fa fa-trash-o"></i></a>
                        </td>

                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Terreno</td>
                        <td>1202003212</td>
                        <td>Dirección</td>
                        <td>Calle 1</td>
                        <td>Calle 2</td>
                        <td>Colonia</td>
                        <td>54820</td>
                        <td>800</td>
                        <td>600</td>

                        <td class="table-action">
                          <a href="{{ URL::to('frontend/mistramites') }}" title="Trámites o Servicios en Esta Propiedad" data-toggle="tooltip" data-trigger="hover" class="tooltips"><i class="fa fa-list-alt"></i></a>
                          <a href="{{ URL::to('frontend/documentos') }}" title="Documentos Cargados de Esta Propiedad" data-toggle="tooltip" data-trigger="hover" class="tooltips delete-row"><i class="fa fa-archive"></i></a>
                        </td>

                        <td class="table-action">
                          <a href="#"  data-target=".bs-example-modal-sm" title="Editar propiedad" data-toggle="modal" data-trigger="hover" class="tooltips"><i class="fa fa-pencil"></i></a>
                          <a href="" title="Quitar de mis propiedades " data-toggle="tooltip" data-trigger="hover" class="tooltips delete-row"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Empresa</td>
                        <td>1202003212</td>
                        <td>Dirección</td>
                        <td>Calle 1</td>
                        <td>Calle 2</td>
                        <td>Colonia</td>
                        <td>54820</td>
                        <td>800</td>
                        <td>600</td>


                        <td class="table-action">
                          <a href="{{ URL::to('frontend/mistramites') }}" title="Trámites o Servicios en Esta Propiedad" data-toggle="tooltip" data-trigger="hover" class="tooltips"><i class="fa fa-list-alt"></i></a>
                          <a href="{{ URL::to('frontend/documentos') }}" title="Documentos Cargados de Esta Propiedad" data-toggle="tooltip" data-trigger="hover" class="tooltips delete-row"><i class="fa fa-archive"></i></a>
                        </td>

                        <td class="table-action">
                          <a href="#"  data-target=".bs-example-modal-sm" title="Editar propiedad" data-toggle="modal" data-trigger="hover" class="tooltips"><i class="fa fa-pencil"></i></a>
                          <a href="#" title="Quitar de mis propiedades " data-toggle="tooltip" data-trigger="hover" class="tooltips delete-row"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>

                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="centrar">
                          <a href="" data-target=".modalagregar" title="Agregar nueva propiedad" data-toggle="modal" data-trigger="hover" class="btn btn-primary tooltips"><i class="fa fa-plus"></i></a>
                        </td>
                      </tr>

                    </tbody>
                  </table>
                </div><!-- table-responsive -->


            </div><!--Panel Body-->

            <!--<div class="panel-footer ">
              <form action="">
                <button class="btn btn-final ">Nueva</button>
              </form>


            </div><!-- panel-footer -->
        </div>


@stop




@section('script')
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">

        <div class="modal-header">
            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
            <h4 class="panel-title">Editar Propiedad</h4>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <label class="col-sm-12 control-label">Alias</label>
            <div class="col-sm-12">
              <input type="text" placeholder="Alias" class="form-control" value="Casa"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-12 control-label">Clave Catastral</label>
            <div class="col-sm-12">
              <input type="text" placeholder="Clave Catastral" class="form-control" value="1372393859"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-12 control-label">Dirección</label>
            <div class="col-sm-12">
              <input type="text" placeholder="Dirección" class="form-control" value="Alfonso Reyes, Esq. Venustiano Carranza"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-12 control-label">Entre Calle</label>
            <div class="col-sm-12">
              <input type="text" placeholder="Entre Calle" class="form-control" value="Av. 16 de Septiembre"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-12 control-label">Y Calle</label>
            <div class="col-sm-12">
              <input type="text" placeholder="Y Calle" class="form-control" value="Prol. Venustiano Carranza"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-12 control-label">Colonia</label>
            <div class="col-sm-12">
              <input type="text" placeholder="Colonia" class="form-control" value="Fracc. Sta. María"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-12 control-label">Código Postal</label>
            <div class="col-sm-12">
              <input type="text" placeholder="Código Postal" class="form-control" value="54820"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-12 control-label">Superficie del Predio (m<sup>2</sup>)</label>
            <div class="col-sm-12">
              <input type="text" placeholder="Superficie del Predio" class="form-control" value="800"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-12 control-label">Superficie de Construcción Existente (m<sup>2</sup>)</label>
            <div class="col-sm-12">
              <input type="text" placeholder="Superficie del Construcción Existente" class="form-control" value="800"/>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <a href="" class="btn btn-final">Guardar</a>
        </div>
    </div>
  </div>
</div>


<div class="modal fade modalagregar" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">

        <div class="modal-header">
            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
            <h4 class="panel-title">Agregar Propiedad</h4>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <label class="col-sm-12 control-label">Alias</label>
            <div class="col-sm-12">
              <input type="text" placeholder="Alias" class="form-control" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-12 control-label">Clave Catastral</label>
            <div class="col-sm-12">
              <input type="text" placeholder="Clave Catastral" class="form-control" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-12 control-label">Dirección</label>
            <div class="col-sm-12">
              <input type="text" placeholder="Dirección" class="form-control" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-12 control-label">Entre Calle</label>
            <div class="col-sm-12">
              <input type="text" placeholder="Entre Calle" class="form-control" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-12 control-label">Y Calle</label>
            <div class="col-sm-12">
              <input type="text" placeholder="Y Calle" class="form-control" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-12 control-label">Colonia</label>
            <div class="col-sm-12">
              <input type="text" placeholder="Colonia" class="form-control" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-12 control-label">Código Postal</label>
            <div class="col-sm-12">
              <input type="text" placeholder="Código Postal" class="form-control" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-12 control-label">Superficie del Predio (m<sup>2</sup>)</label>
            <div class="col-sm-12">
              <input type="text" placeholder="Superficie del Predio" class="form-control" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-12 control-label">Superficie de Construcción Existente (m<sup>2</sup>)</label>
            <div class="col-sm-12">
              <input type="text" placeholder="Superficie del Construcción Existente" class="form-control" />
            </div>
          </div>

        </div>
        w
    </div>
  </div>
</div>

@stop
