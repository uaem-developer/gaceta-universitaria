
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
                <div style="text-align: left;">
                    <a href="{{ route('admin_post_create') }}" class=" btn btn-default">Nuevo Post</a>
                </div>
                    <br/>
                    <div class="clearfix"></div>
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
                            <td>{{$post->section()->first()->title}}</td>
                            <td>{{$post['created_at']}}</td>
                            <td>
                                <a href="{{ route('post', [$post->section()->first()->slug_url, $post['slug_url'], $post['id']]);  }}" target="_blank">Preview <i class="fa fa-eye"></i></a> |
                                <a href="{{ route('admin_post_edit', $post['id']);  }}">Editar <i class="fa fa-arrow-circle-right"></i></a> |
                                <a onclick="deletePost( '{{ $post['title'] }}', '{{  $post['id'] }}' );" href="#">Eliminar <i class="fa fa-times"></i></a>
                            </td>
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
    <script src="{{ asset('assets/admin/js/bootbox.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('.table').dataTable({

            });

            $( "#menu-posts" ).addClass( "active" );

        });
        http://gaceta.app:8000/admin/posts/delete/47
        function deletePost(title, post_id){
            bootbox.confirm("Eliminar publicación " + title, function(result) {
                if(result == true)
                    window.location.href = "posts/delete/" + post_id;
            });
        }

    </script>
@stop
