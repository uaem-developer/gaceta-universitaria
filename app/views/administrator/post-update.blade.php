

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


                {{ Form::model($post, ['route' => ['admin_post_update',$post->id], 'method' => 'PUT', 'role' => 'form','novalidate']) }}


                {{ Field::select('type', $post_types) }}

                {{ Field::text('title', '' , ['id' => 'title', 'placeholder' => 'Titulo']) }}

                {{ Field::text('order_num', '' , ['id' => 'title']) }}

                {{ Field::text('meta_description', '', ['id' => 'meta_description']) }}

                {{ Field::textarea('body',$post->body, ['class' => 'ckeditor']); }}

                {{ Field::file('image') }}

                {{ Field::file('attach_file ') }}

                {{ Field::checkbox('published ',['checked'=> 'true', 'class' => 'success']) }}

                {{ Field::checkbox('featured ') }}

                 <button type="submit" class="btn btn-success btn-block">Actualizar</button>


            {{ Form::close(); }}
            <hr>
            </div><!--Panel Body-->
        </div>


@stop




@section('script')

    <script type="text/javascript" src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>


@stop
