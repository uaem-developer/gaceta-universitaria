

@extends('administrator/layout')

@section('css')
@endsection

@section('pageheader')
        <h2><i class="fa fa-list-alt"></i>Modificar Noticia</h2>
        <div class="breadcrumb-wrapper">
            <span class="label">Usted se encuentra en:</span>
            <ol class="breadcrumb">
                <li><a href="{{ route('admin_posts') }}">Noticias</a></li>
                <li class="active">Modificar Noticias</li>
            </ol>
        </div>
@stop


@section('content')

         <div class="panel panel-default">
            <div class="panel-body">


                {{ Form::model($post, ['route' => ['admin_post_update',$post->id], 'method' => 'PUT', 'role' => 'form','novalidate','files' => true]) }}


                {{ Field::text('title') }}

                {{ Field::select('section_id', $sections) }}
                {{ Field::select('gaceta_number', $gaceta_numbers) }}

                {{ Field::number('order_num') }}

                {{ Field::text('authored_by') }}

                {{ Field::textarea('meta_description', $post->meta_description, ['rows' => '5']); }}
                {{ Field::textarea('body', $post->body, ['class' => 'ckeditor']); }}

                {{ Form::text('image_document', $post->image, ['hidden']) }}
                {{ Form::text('image2_document', $post->image2, ['hidden']) }}
                {{ Form::text('image3_document', $post->image3, ['hidden']) }}
                {{ Form::text('image4_document', $post->image4, ['hidden']) }}
                {{ Form::text('image5_document', $post->image5, ['hidden']) }}
                {{ Form::text('attach_file_document', $post->attach_file, ['hidden']) }}


                <div class="form-group">
                    <label class="col-sm-2">Imagen</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="input-append">
                                    <div class="uneditable-input" >
                                        <i class="glyphicon glyphicon-file fileupload-exists"></i>
                                        <span class="fileupload-preview"><i class="fa fa-file-o"></i> {{ $post->image }}</span>
                                    </div>
                                    @if( ! empty($post->image))
                                    <a href="{{ asset('uploads/posts')."/".$post->image}}" class="btn btn-primary btn-sm" target="_blank" >Ver Archivo</a>
                                    @endif
                                    <a  class="btn btn-default btn-sm" onClick="$('#image_document').click()"; > @if( ! empty($post->image)) Cambiar @else Seleccionar @endif</a>
                                    <div style="display:none">
                                        {{ Form::file('image', ['id' => 'image_document']) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2">Imagen 2</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="input-append">
                                    <div class="uneditable-input" >
                                        <i class="glyphicon glyphicon-file fileupload-exists"></i>
                                        <span class="fileupload-preview"><i class="fa fa-file-o"></i> {{ $post->image2 }}</span>
                                    </div>
                                    @if( ! empty($post->image2))
                                        <a href="{{ asset('uploads/posts')."/".$post->image2}}" class="btn btn-primary btn-sm" target="_blank" >Ver Archivo</a>
                                    @endif
                                    <a  class="btn btn-default btn-sm" onClick="$('#image2_document').click()"; > @if( ! empty($post->image2)) Cambiar @else Seleccionar @endif</a>
                                    <div style="display:none">
                                        {{ Form::file('image2', ['id' => 'image2_document']) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2">Imagen 3</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="input-append">
                                    <div class="uneditable-input" >
                                        <i class="glyphicon glyphicon-file fileupload-exists"></i>
                                        <span class="fileupload-preview"><i class="fa fa-file-o"></i> {{ $post->image3 }}</span>

                                    </div>

                                @if( ! empty($post->image3))
                                        <a href="{{ asset('uploads/posts')."/".$post->image3}}" class="btn btn-primary btn-sm" target="_blank" >Ver Archivo</a>
                                    @endif
                                    <a  class="btn btn-default btn-sm" onClick="$('#image3_document').click()"; > @if( ! empty($post->image3)) Cambiar @else Seleccionar @endif</a>
                                    <div style="display:none">
                                        {{ Form::file('image3', ['id' => 'image3_document']) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2">Imagen 4</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="input-append">
                                    <div class="uneditable-input" >
                                        <i class="glyphicon glyphicon-file fileupload-exists"></i>
                                        <span class="fileupload-preview"><i class="fa fa-file-o"></i> {{ $post->image4 }}</span>
                                    </div>
                                    @if( ! empty($post->image4))
                                        <a href="{{ asset('uploads/posts')."/".$post->image4}}" class="btn btn-primary btn-sm" target="_blank" >Ver Archivo</a>
                                    @endif
                                    <a  class="btn btn-default btn-sm" onClick="$('#image4_document').click()"; > @if( ! empty($post->image4)) Cambiar @else Seleccionar @endif</a>
                                    <div style="display:none">
                                        {{ Form::file('image4', ['id' => 'image4_document']) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2">Imagen 5</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="input-append">
                                    <div class="uneditable-input" >
                                        <i class="glyphicon glyphicon-file fileupload-exists"></i>
                                        <span class="fileupload-preview"><i class="fa fa-file-o"></i> {{ $post->image5 }}</span>
                                    </div>
                                    @if( ! empty($post->image5))
                                        <a href="{{ asset('uploads/posts')."/".$post->image5}}" class="btn btn-primary btn-sm" target="_blank" >Ver Archivo</a>
                                    @endif
                                    <a  class="btn btn-default btn-sm" onClick="$('#image5_document').click()"; > @if( ! empty($post->image5)) Cambiar @else Seleccionar @endif</a>

                                    <div style="display:none">
                                        {{ Form::file('image5', ['id' => 'image5_document']) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2">Adjuntar archivo</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="input-append">
                                    <div class="uneditable-input" >
                                        <i class="glyphicon glyphicon-file fileupload-exists"></i>
                                        <span class="fileupload-preview"><i class="fa fa-file-o"></i> {{ $post->attach_file }}</span>
                                    </div>
                                    @if( ! empty($post->attach_file))
                                        <a href="{{ asset('uploads/posts')."/".$post->attach_file}}" class="btn btn-primary btn-sm" target="_blank" >Ver Archivo</a>
                                    @endif
                                    <a  class="btn btn-default btn-sm" onClick="$('#attach_file_document').click()"; > @if( ! empty($post->attach_file)) Cambiar @else Seleccionar @endif</a>

                                    <div style="display:none">
                                        {{ Form::file('attach_file', ['id' => 'attach_file_document']) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{ Field::text('photographer') }}

                {{ Form::hidden('promoted_front', false) }}
                {{ Field::checkbox('promoted_front') }}

                {{ Form::hidden('promoted_section', false) }}
                {{ Field::checkbox('promoted_section') }}

                {{ Form::hidden('frontpage', false) }}
                {{ Field::checkbox('frontpage') }}

                {{ Form::hidden('published', false) }}
                {{ Field::checkbox('published') }}

                <button type="submit" class="btn btn-success btn-block">Actualizar</button>

            {{ Form::close(); }}
            <hr>
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
