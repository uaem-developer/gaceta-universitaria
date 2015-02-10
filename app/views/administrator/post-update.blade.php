

@extends('administrator/layout')

@section('css')
@endsection

@section('pageheader')
        <h2><i class="fa fa-list-alt"></i>Trámites y Servicios</h2>
        <div class="breadcrumb-wrapper">
            <span class="label">Usted se encuentra en:</span>
            <ol class="breadcrumb">
                <li><a href="{{ URL::to('frontend/rontend/perfil') }}">Inicio</a></li>
                <li class="active">Trámites y Servicios</li>
            </ol>
        </div>
@stop


@section('content')

         <div class="panel panel-default">
            <div class="panel-body">


                {{ Form::model($post, ['route' => ['admin_post_update',$post->id], 'method' => 'PUT', 'role' => 'form','novalidate','files' => true]) }}


                {{ Field::text('title') }}

                {{ Field::select('section_id', $sections) }}

                {{ Field::number('order_num') }}

                {{ Field::textarea('meta_description','',['rows' => '5']); }}
                {{ Field::textarea('body','', ['class' => 'ckeditor']); }}

                {{ Field::file('image') }}
                {{ Field::file('attach_file') }}

                {{ Field::checkbox('published')  }}

                {{ Field::checkbox('promoted_front')  }}

                 <button type="submit" class="btn btn-success btn-block">Actualizar</button>


            {{ Form::close(); }}
            <hr>
            </div><!--Panel Body-->
        </div>


@stop




@section('script')

    <script type="text/javascript" src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            $( "#menu-posts" ).addClass( "active" );
        });
    </script>

@stop
