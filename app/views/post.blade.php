@extends('layout')

@section('headers')
    <title>Post - Gaceta Universitaria</title>
    <meta name="description" value="descripción"/>
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
        <li><a href="#">Inicio</a></li>
        <li>|</li>
        <li><a href="#">Investigación y Académia</a></li>
        <li>|</li>
        <li><a href="#">Marcha UAEM apoyo a estudiantes de Ayotzinapa</a></li>
    </ul>
@endsection


@section('content')
    <section class="main-content">

       <div class="row">
           <div class="large-13 columns padding-0">
                <ul class="bxslider ">
                    <li><img src="{{asset('assets/img/imagen-post-interior.jpg')}}" /></li>
                    <li><img src="{{asset('assets/img/imagen-post-interior.jpg')}}" /></li>
                    <li><img src="{{asset('assets/img/imagen-post-interior.jpg')}}" /></li>
                </ul>
           </div>

            <div id="bx-pager" class="large-3 columns ">
                <a data-slide-index="0" href=""><img src="{{asset('assets/img/imagen-post-interior-thumb.jpg')}}" /></a>
                <a data-slide-index="1" href=""><img src="{{asset('assets/img/imagen-post-interior-thumb.jpg')}}" /></a>
                <a data-slide-index="2" href=""><img src="{{asset('assets/img/imagen-post-interior-thumb.jpg')}}" /></a>
            </div>
       </div>

        <div class="title-post">
            <div class="section-content"> Academia e Investigación</div>
            <h1>Marcha UAEM en apoyo a normalistas de Ayotzinapa</h1>
        </div>
        <div class="post-author">
            Por Salvador Rivera | Enero 6 de 2015
        </div>

        <div class="content-post">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto aspernatur dicta dignissimos distinctio dolore eligendi enim est, ex, fugit itaque iure iusto labore natus quia quos ratione sunt suscipit!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci nesciunt perspiciatis placeat. Ab accusamus alias architecto consequuntur, delectus ea hic illum in ipsam laboriosam laborum, laudantium, quaerat quis vero vitae.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur assumenda atque cum, cumque distinctio ducimus ea eius eligendi error est, illum non quo reprehenderit rerum voluptatem? Incidunt quisquam soluta unde.</p>

        </div>
    </section>

    <section class="main-content">
        <h2>Más leidos</h2>
        <div class="large-5 columns">
            <figure class="large-6 columns padding-0">
                <img src="{{ asset('assets/img/thumb-image-post.jpg') }}" alt=""/>
            </figure>
            <div class="large-10 columns padding-0">
                <h4>Arranca obra del claustro universitario</h4>
                <div class="post-author">
                    Por salvador rivera <br/>
                    Enero 6 2015 | Gaceta no 433 | Gestión
                    <br/>
                    <a href="#" class="btn">ver noticia</a>
                </div>
            </div>
        </div>
        <div class="large-5 columns">
            <figure class="large-6 columns padding-0">
                <img src="{{ asset('assets/img/thumb-image-post.jpg') }}" alt=""/>
            </figure>
            <div class="large-10 columns padding-0">
                <h4>Arranca obra del claustro universitario</h4>
                <div class="post-author">
                    Por salvador rivera <br/>
                    Enero 6 2015 | Gaceta no 433 | Gestión
                    <br/>
                    <a href="#" class="btn">ver noticia</a>
                </div>
            </div>
        </div>
        <div class="large-5 columns">
            <figure class="large-6 columns padding-0">
                <img src="{{ asset('assets/img/thumb-image-post.jpg') }}" alt=""/>
            </figure>
            <div class="large-10 columns padding-0">
                <h4>Arranca obra del claustro universitario</h4>
                <div class="post-author">
                    Por salvador rivera <br/>
                    Enero 6 2015 | Gaceta no 433 | Gestión
                    <br/>
                    <a href="#" class="btn">ver noticia</a>
                </div>
            </div>
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