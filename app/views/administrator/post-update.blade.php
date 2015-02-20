

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


                <div class="col-md-2">
                    Galería de imagenes
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <div class="fileinput @if(! empty($post->image)) fileinput-exists @else fileinput-new @endif" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 250px; height: 120px;">
                                    @if(! empty($post->image)) <img src="{{ asset('uploads/posts/'.$post->image) }}" > @endif
                                </div>
                                <div>
                                <span class="btn btn-default btn-file "><span class="fileinput-new">Seleccionar archivo</span> <span class="fileinput-exists">Cambiar</span>
                                    <input type="file" name="image"  @if(! empty($post->image)) value="{{ $post->image }}"  @endif />
                                </span>
                                    <a target="_blank" href="{{ asset('uploads/posts/'.$post->image) }}" class="btn btn-default fileinput-exists" >Ver</a>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Quitar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">{{ Field::text('photographer') }}</div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <div class="fileinput @if(! empty($post->image2)) fileinput-exists @else fileinput-new @endif" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 250px; height: 120px;">
                                    @if(! empty($post->image2)) <img src="{{ asset('uploads/posts/'.$post->image2) }}" > @endif
                                </div>
                                <div>
                                <span class="btn btn-default btn-file"><span class="fileinput-new">Seleccionar archivo</span><span class="fileinput-exists">Cambiar</span>
                                    <input type="file" name="image2"/>
                                </span>
                                    <a target="_blank" href="{{ asset('uploads/posts/'.$post->image2) }}" class="btn btn-default fileinput-exists" >Ver</a>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Quitar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">{{ Field::text('photographer2') }}</div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <div class="fileinput @if(! empty($post->image3)) fileinput-exists @else fileinput-new @endif" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 250px; height: 120px;">
                                    @if(! empty($post->image3)) <img src="{{ asset('uploads/posts/'.$post->image3) }}" > @endif
                                </div>
                                <div>
                                <span class="btn btn-default btn-file"><span class="fileinput-new">Seleccionar archivo</span><span class="fileinput-exists">Cambiar</span>
                                    <input type="file" name="image3"/>
                                </span>
                                    <a target="_blank" href="{{ asset('uploads/posts/'.$post->image3) }}" class="btn btn-default fileinput-exists" >Ver</a>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Quitar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">{{ Field::text('photographer3') }}</div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <div class="fileinput @if(! empty($post->image4)) fileinput-exists @else fileinput-new @endif" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 250px; height: 120px;">
                                    @if(! empty($post->image4)) <img src="{{ asset('uploads/posts/'.$post->image4) }}" > @endif
                                </div>
                                <div>
                                <span class="btn btn-default btn-file"><span class="fileinput-new">Seleccionar archivo</span><span class="fileinput-exists">Cambiar</span>
                                    <input type="file" name="image4"/>
                                </span>
                                    <a target="_blank" href="{{ asset('uploads/posts/'.$post->image4) }}" class="btn btn-default fileinput-exists" >Ver</a>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Quitar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">{{ Field::text('photographer4') }}</div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <div class="fileinput @if(! empty($post->image5)) fileinput-exists @else fileinput-new @endif" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 250px; height: 120px;">
                                    @if(! empty($post->image5)) <img src="{{ asset('uploads/posts/'.$post->image5) }}" > @endif
                                </div>
                                <div>
                                <span class="btn btn-default btn-file"><span class="fileinput-new">Seleccionar archivo</span><span class="fileinput-exists">Cambiar</span>
                                    <input type="file" name="image5"/>
                                </span>
                                    <a target="_blank" href="{{ asset('uploads/posts/'.$post->image5) }}" class="btn btn-default fileinput-exists" >Ver</a>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Quitar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">{{ Field::text('photographer5') }}</div>
                    </div>
                </div>
                <div class="col-md-2">
                    Archivo adjunto
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <div class="fileinput @if(! empty($post->attach_file)) fileinput-exists @else fileinput-new @endif" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 250px; height: 120px;">
                                    @if(! empty($post->attach_file)) {{ asset('uploads/posts/'.$post->attach_file) }} @endif
                                </div>
                                <div>
                                <span class="btn btn-default btn-file"><span class="fileinput-new">Seleccionar archivo</span><span class="fileinput-exists">Cambiar</span>
                                    <input type="file" name="attach_file"/>
                                </span>
                                    <a target="_blank" href="{{ asset('uploads/posts/'.$post->attach_file) }}" class="btn btn-default fileinput-exists" >Ver</a>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Quitar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
