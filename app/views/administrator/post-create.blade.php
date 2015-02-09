
@extends('administrator/layout')

@section('css')


@stop

@section('pageheader')
        <h2><i class="fa fa-list-alt"></i>Actividades y Convocatorias</h2>
        <div class="breadcrumb-wrapper">
            <span class="label">Usted se encuentra en:</span>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin_posts') }}">Inicio</a></li>
                <li class="active">Crear un post</li>
            </ol>
        </div>
@stop


@section('content')

         <div class="panel panel-default">
            <div class="panel-body">
                <h2>Alta</h2>

                {{ Form::open(['route' => 'admin_post_store', 'method' => 'POST', 'role' => 'form']) }}

                    {{ Field::text('title') }}

                    {{ Field::select('section_id', $sections) }}

					{{ Field::number('order_num') }}

                    {{ Field::textarea('meta_description','',['rows' => '5']); }}
					{{ Field::textarea('body','', ['class' => 'ckeditor']); }}

                    {{ Field::file('image') }}
                    {{ Field::file('attach_file') }}

					{{ Field::checkbox('published')  }}

					{{ Field::checkbox('featured')  }}

                    <br />

                    <button type="submit" class="btn btn-success btn-block">Guardar</button>
                {{ Form::close() }}

            </div><!--Panel Body-->

        </div>


@stop




@section('script')

    <script type="text/javascript" src="{{ asset('assets/admin/js/ckeditor/ckeditor.js') }}"></script>

@stop
