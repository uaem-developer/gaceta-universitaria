@extends('layout')

@section('headers')
    <title>{{ $post->title }} - Gaceta UAEM Virtual</title>
    <meta name="description" value="{{ $post->meta_description }}"/>
@endsection

@section('styles')

    <!-- bxSlider CSS file -->
    <link href="{{ asset('assets/css/jquery.bxslider.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/post.css') }}" rel="stylesheet" />

@endsection

@section('banner')
    <figure class="isotype">
        <img src="{{ asset('assets/img/logo-gaceta-uaem.jpg') }}" alt="Gaceta Universitaria"/>
    </figure>
@endsection

@section('header-text')
    
@endsection

@section('breadcrumb')
    <ul class="breadcrumb">
        <li><a href="{{route('home')}}">Inicio</a></li>
        <li>|</li>
        <li><a href="{{ route('section', [$section->slug_url] ) }}">{{ $section->title }}</a></li>
        <li>|</li>
        <li><a href="#">{{ $post->title }}</a></li>
    </ul>
@endsection


@section('content')
    <section class="main-content">

       <div class="row">
           <div class="@if( empty($post->image2) && empty($post->image3) && empty($post->image4) && empty($post->image5)) large-16  @else large-13 @endif columns padding-0">
                <ul class="bxslider ">
                    @if(! empty($post->image))
                        <li><img src="{{ asset('uploads/posts/'.$post->image) }}" /></li>
                    @endif
                    @if(! empty($post->image2))
                        <li><img src="{{ asset('uploads/posts/'.$post->image2) }}" /></li>
                    @endif
                    @if(! empty($post->image3))
                        <li><img src="{{ asset('uploads/posts/'.$post->image3) }}" /></li>
                    @endif
                    @if(! empty($post->image4))
                        <li><img src="{{ asset('uploads/posts/'.$post->image4) }}" /></li>
                    @endif
                    @if(! empty($post->image5))
                        <li><img src="{{ asset('uploads/posts/'.$post->image5) }}" /></li>
                    @endif
                </ul>
           </div>
           @if( empty($post->image2) && empty($post->image3) && empty($post->image4) && empty($post->image5))


           <div class="clearfix"></div>

           @else
            <div id="bx-pager" class="large-3 columns ">
                @if(! empty($post->image))
                    <a data-slide-index="0" href=""><img src="{{ asset('uploads/posts/'.$post->image) }}" /></a>
                @endif
                @if(! empty($post->image2))
                    <a data-slide-index="1" href=""><img src="{{ asset('uploads/posts/'.$post->image2) }}" /></a>
                @endif
                @if(! empty($post->image3))
                    <a data-slide-index="2" href=""><img src="{{ asset('uploads/posts/'.$post->image3) }}" /></a>
                @endif
                @if(! empty($post->image4))
                    <a data-slide-index="3" href=""><img src="{{ asset('uploads/posts/'.$post->image4) }}" /></a>
                @endif
                @if(! empty($post->image5))
                    <a data-slide-index="4" href=""><img src="{{ asset('uploads/posts/'.$post->image5) }}" /></a>
                @endif
            </div>
           @endif
       </div>

        <div class="title-post">
            <div class="section-content"> {{ $section->title  }}</div>
            <h1>{{ $post->title }}</h1>
        </div>

        <div class="post-author">
            @if(! empty($post->authored_by))  {{ $post->authored_by }} | @endif {{$post->created_at}}
        </div>

        <div class="content-post">
           {{ $post->body }}
        </div>
    </section>

    <section class="main-content">
        <h2>Más leidos</h2>

        @foreach($lastest_posts as $last_post)

            <div class="large-8 columns">
                @if(! empty($last_post->image))
                <figure class="large-6 columns padding-0">
                    <img src="{{ asset('uploads/posts/'.$last_post->image) }}" alt=""/>
                </figure>
                @else
                    <figure class="large-6 columns padding-0">
                        <img src="{{ asset('assets/img/uaem-logo.jpg') }}" alt="{{$last_post->title}}"/>
                    </figure>
                @endif
                <div class="large-10 columns padding-0">
                    <a href="{{ route('post', [$section->slug_url, $last_post->slug_url, $last_post->id] ) }}"><h4>{{$last_post->title}}</h4></a>
                    <div class="post-author">
                        @if(! empty($last_post->authored_by))
                         {{ $last_post->authored_by }} <br/>
                        @endif

                        {{$last_post->created_at }} | {{ $section->title }}
                        <br/>
                        <a href="{{ route('post', [$section->slug_url, $last_post->slug_url, $last_post->id] ) }}" class="btn">ver noticia</a>
                    </div>
                </div>
            </div>
        @endforeach

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