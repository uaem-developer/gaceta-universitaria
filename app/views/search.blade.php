@extends('layout')

@section('headers')
    <title>Post - Gaceta Universitaria</title>
    <meta name="description" value="descripción"/>
@endsection

@section('styles')

    <!-- bxSlider CSS file -->
    <link href="{{ asset('assets/css/jquery.bxslider.css') }}" rel="stylesheet" />

@endsection

@section('banner')
    <figure>
        <img src="{{ asset('assets/img/banner.jpg') }}" alt="Gaceta Universitaria"/>
    </figure>
@endsection

@section('header-text')

@endsection

@section('breadcrumb')
    <ul class="breadcrumb">
        <li><a href="{{ route('home') }}">Inicio</a></li>
        <li>|</li>
        <li>Resultados de búsqueda</li>
    </ul>
@endsection


@section('content')
    <section class="main-content">

        {{ Form::open(['route' => 'search', 'method' => 'POST', 'role' => 'form', 'class' => 'busqueda-de-gaceta form-inline']) }}
        <div class="control">
            <label for="no_gaceta">Título</label>
            {{ Form::text('title'); }}
        </div>
        <div class="control">
            <label for="fecha_evento">Fecha de evento</label>
            <input type="text" name="fecha_evento"/>
        </div>
        <div class="control">
            <label for="autor">Autor</label>
            <input type="text" name="no_gaceta"/>
        </div>
        <div class="control">
            <label for="categoria">Categoría</label>
            <select name="seccion" >
                <option value="">...</option>
                <option value="1">Gestión</option>
                <option value="2">Docencia</option>
                <option value="3">Investigación</option>
                <option value="4">Estensión</option>
                <option value="5">Anuncios</option>
                <option value="6">Colaboraciones</option>
                <option value="7">Galería de fotos</option>
            </select>
        </div>
        <div class="control"><button class="btn">Buscar</button></div>
        {{ Form::close(); }}

        <div class="row post-section">

            @foreach($posts as $post)
                <div class="large-8 columns list-section-post">
                    <a href="{{ route('post', [$post->section()->first()->slug_url, $post->slug_url, $post->id]) }}" title="{{$post->title}}"><h3>{{$post->title}}</h3></a>
                    <div class="detail-post">
                        {{ $post->created_at }} | {{ $post->section()->first()->title }}
                    </div>
                    <div class="row">
                        @if(!empty($post->image))
                            <div class="large-8 columns">
                                <figure>
                                    <img src="uploads/posts/{{ $post->image }}" alt="{{$post->title}}"/>
                                </figure>
                            </div>
                        @endif
                        <div class="large-8 columns">
                            <p>{{$post->meta_description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection

@section('scripts')

@endsection