
@extends('administrator/layout')

@section('css')


@stop

@section('pageheader')
    <h2><i class="fa fa-list-alt"></i>Crear sección</h2>
    <div class="breadcrumb-wrapper">
        <span class="label">Usted se encuentra en:</span>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin_sections') }}">Secciones</a></li>
            <li class="active">Crear sección</li>
        </ol>
    </div>
@stop


@section('content')

    <div class="panel panel-default">
        <div class="panel-body">
            <h2>Crear sección</h2>

            {{ Form::open(['route' => 'admin_section_store', 'method' => 'POST', 'role' => 'form','files' => true]) }}

            {{ Field::text('title') }}

            {{ Field::textarea('meta_description','',['rows' => '5']); }}
            {{ Field::textarea('body','', ['class' => 'ckeditor']); }}

            {{ Field::file('banner') }}

            {{ Field::text('banner_url') }}

            {{ Field::checkbox('published')  }}

            <br />

            <button type="submit" class="btn btn-success btn-block">Guardar</button>
            {{ Form::close() }}

        </div><!--Panel Body-->

    </div>


@stop




@section('script')

    <script type="text/javascript" src="{{ asset('assets/admin/js/ckeditor/ckeditor.js') }}"></script>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            $( "#menu-secciones" ).addClass( "active" );
        });
    </script>
@stop
