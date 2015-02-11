
@extends('administrator/layout')

@section('css')
@stop

@section('pageheader')
        <h2><i class="fa fa-list-alt"></i>Noticias</h2>
        <div class="breadcrumb-wrapper">
            <span class="label">Usted se encuentra en:</span>
            <ol class="breadcrumb">
                <li class="active">Noticias</li>
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
                        <th>Titulo</th>
                          <th>Sección</th>
                          <th>Fecha</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                          <tr>
                            <td>{{$post['title']}}</td>
                            <td>{{$post['section']['title']}}</td>
                            <td>{{$post['created_at']}}</td>
                            <td> <a href="{{ route('admin_post_edit', $post['id']);  }}">Editar <i class="fa fa-arrow-circle-right"></i></a> </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
            </div><!--Panel Body-->
            <div class="panel-footer panel-btns" style="text-align: right;">
              <a href="{{ route('admin_post_create') }}" class=" btn btn-default">Nuevo Post</a>
            </div>


        </div>

@stop




@section('script')

    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('.table').dataTable({

            });

            $( "#menu-posts" ).addClass( "active" );

        });

    </script>
@stop
