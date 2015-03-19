@extends('layout')

@section('headers')
    <title>{{ $section->title }} - Gaceta UAEM Virtual</title>
    <meta name="description" value="{{ $section->meta_description }}"/>

    <!-- FACEBOOK OPEN GRAPH -->
    <meta property="og:title" content="{{ $section->title }} - Gaceta UAEM Virtual" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ route('section', $section->slug_url ) }}" />
    <meta property="og:image" content="http://www.uaem.mx/gacetavirtual/assets/img/banner.jpg" />
    <meta property="og:site_name" content="Gaceta virtual universitaria" />
    <meta property="og:description"
          content="{{ $section->meta_description }}"/>
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
    <section class="header-text large-16 columns pleca-seccion {{ $section->slug_url }}">
        <div class="large-4 columns txt-right"><h1>{{$section->title}}</h1></div>
        <div class=" large-12 columns"><p class="text-columns" >
            {{ $section->body }}
            </p>
        </div>
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

        <div class="row post-section">

            @foreach($posts as $post)
                <div class="medium-8 columns list-section-post">
                    <a href="{{ route('post', [$section->slug_url, $post->slug_url, $post->id]) }}" title="{{$post->title}}"><h3>{{$post->title}}</h3></a>
                        <div class="detail-post">
                            {{ date('M j, Y', strtotime($post->created_at)) }} | {{ $section->title }} | {{ $post->gaceta_number }}
                        </div>
                    <div class="row">
                        @if(!empty($post->image))
                            <div class="large-8 columns">
                                <a href="{{ route('post', [$section->slug_url, $post->slug_url, $post->id]) }}" title="{{$post->title}}">
                                    <figure>
                                        <img src="{{ asset('uploads/posts/'.$post->image) }}" alt="{{$post->title}}"/>
                                    </figure>
                                </a>
                            </div>
                        @else
                            <div class="large-8 columns">
                                <a href="{{ route('post', [$section->slug_url, $post->slug_url, $post->id]) }}" title="{{$post->title}}">
                                    <figure><img src="{{ asset('assets/img/uaem-logo.jpg') }}" alt="{{$post->title}}"/></figure>
                                </a>
                            </div>
                        @endif
                        <div class="large-8 columns">
                            <p>{{$post->meta_description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="clearfix"></div>
        {{ $posts->links(); }}

    </section>

@endsection

@section('scripts')

@endsection