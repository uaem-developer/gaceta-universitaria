
@extends('administrator/layout')

@section('css')


@stop

@section('pageheader')
    <h2><i class="fa fa-list-alt"></i>Modificar sección</h2>
    <div class="breadcrumb-wrapper">
        <span class="label">Usted se encuentra en:</span>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin_sections') }}">Secciones</a></li>
            <li class="active">Modificar sección</li>
        </ol>
    </div>
@stop


@section('content')

    <div class="panel panel-default">
        <div class="panel-body">
            <h2>Modificar sección</h2>

            {{ Form::model($section, ['route' => ['admin_section_update',$section->id], 'method' => 'PUT', 'role' => 'form','novalidate','files' => true]) }}

            {{ Field::text('title') }}

            {{ Field::textarea('meta_description',$section->meta_description, ['rows' => '5']); }}
            {{ Field::textarea('body',$section->body, ['class' => 'ckeditor']); }}


            <div class="form-group">
                <label class="col-sm-2">Banner</label>
                <div class="col-sm-10">
                    <div class="form-group">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="input-append">
                                <div class="uneditable-input" >
                                    <i class="glyphicon glyphicon-file fileupload-exists"></i>
                                    <span class="fileupload-preview"><i class="fa fa-file-o"></i> {{ $section->banner }}</span>
                                </div>
                                <a href="{{ asset('uploads')."/".$section->banner}}" class="btn btn-primary btn-sm" target="_blank" >Ver Archivo</a>
                                <a  class="btn btn-default btn-sm" onClick="$('#banner_document').click()"; >Cambiar</a>
                                <div style="display:none">
                                    {{ Form::file('banner', ['id' => 'banner_document']) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            {{ Form::text('banner_document', $section->banner, ['hidden']) }}


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
    <script src="{{ asset('assets/admin/js/bootstrap-fileupload.min.js') }}"></script>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            $( "#menu-secciones" ).addClass( "active" );
        });
    </script>
@stop
