
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


                    {{ Field::file('image') }}
                    {{ Field::file('image2') }}
                    {{ Field::file('image3') }}
                    {{ Field::file('image4') }}
                    {{ Field::file('image5') }}

                    {{ Field::file('attach_file') }}

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
    </script>
@stop
