
@extends('administrator/layout')

@section('css')


@stop

@section('pageheader')
        <h2><i class="fa fa-list-alt"></i>Crear Noticia</h2>
        <div class="breadcrumb-wrapper">
            <span class="label">Usted se encuentra en:</span>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin_posts') }}">Noticias</a></li>
                <li class="active"><Cr></Cr>ear una noticia</li>
            </ol>
        </div>
@stop


@section('content')

         <div class="panel panel-default">
            <div class="panel-body">

                {{ Form::open(['route' => 'admin_post_store', 'method' => 'POST', 'role' => 'form','files' => true]) }}

                    {{ Field::text('title') }}

                    {{ Field::select('section_id', $sections) }}

                    {{ Field::select('gaceta_number', $gaceta_numbers) }}
                    {{ Field::number('order_num') }}

                    {{ Field::text('authored_by') }}

                    {{ Field::textarea('meta_description','',['rows' => '5']); }}
					{{ Field::textarea('body','', ['class' => 'ckeditor']); }}


                    <div class="col-md-2">
                        Galería de imagenes
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            {{ Field::file('image') }}
                            <div class="col-md-8">{{ Field::text('photographer') }}</div>
                        </div>
                        <div class="row">
                            {{ Field::file('image2') }}
                            <div class="col-md-8">{{ Field::text('photographer2') }}</div>
                        </div>
                        <div class="row">
                            {{ Field::file('image3') }}
                            <div class="col-md-8">{{ Field::text('photographer3') }}</div>
                        </div>
                        <div class="row">
                            {{ Field::file('image4') }}
                            <div class="col-md-8">{{ Field::text('photographer4') }}</div>
                        </div>
                        <div class="row">
                            {{ Field::file('image5') }}
                            <div class="col-md-8">{{ Field::text('photographer5') }}</div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        Archivo adjunto
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            {{ Field::file('attach_file') }}
                        </div>
                    </div>



                    {{ Field::checkbox('promoted_front') }}

                    {{ Field::checkbox('promoted_section') }}

                    {{ Field::checkbox('frontpage') }}

                    {{ Field::checkbox('published') }}


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
            $( "#menu-posts" ).addClass( "active" );
        });


        $('.fileinput').fileinput()
    </script>
@stop
