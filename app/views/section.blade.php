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
    <section class="header-text investigacion row">
        <h1 class="large-4 columns txt-center">{{$section->title}}</h1>
        <p class="text-columns large-12 columns">
            {{ $section->body }}
        </p>
    </section>
@endsection

@section('breadcrumb')
    <ul class="breadcrumb">
        <li><a href="{{ route('home') }}">Inicio</a></li>
        <li>|</li>
        <li><a href="{{ route('section', $section->slug_url ) }}">{{$section->title}}</a></li>
    </ul>
@endsection


@section('content')
    <section class="main-content">

        <form action="" class="search-article form-inline">
            <div class="control">
                <label for="no_gaceta">No Gaceta</label>
                <input type="text" name="no_gaceta"/>
            </div>
            <div class="control">
                <label for="fecha_evento">Fecha de evento</label>
                <input type="text" name="fecha_evento"/>
            </div>
            <div class="control">
                <label for="autor">Autor</label>
                <input type="text" name="autor"/>
            </div>
            <div class="control">
                <label for="categoria">Categoría</label>
                <input type="text" name="categoria"/>
            </div>
            <div class="control"><button class="btn">Buscar</button></div>
        </form>

        <div class="row post-section">

            @foreach($posts as $post)
                <div class="large-8 columns list-section-post">
                    <a href="{{ route('post', [$section->slug_url, $post->slug_url, $post->id]) }}" title="{{$post->title}}"><h3>{{$post->title}}</h3></a>
                    <div class="detail-post">
                        {{ $section->created_at }} | {{ $section->title }}
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
    <!-- jQuery library (served from Google) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- bxSlider Javascript file -->
    <script src="{{asset('assets/js/jquery.bxslider.min.js')}}"></script>

    <script type="text/javascript">
        $('.bxslider').bxSlider({
            pagerCustom: '#bx-pager'
        });
    </script>
@endsection