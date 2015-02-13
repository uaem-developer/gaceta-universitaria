@extends('layout')

@section('headers')
    <title>Gaceta virtual universitaria</title>
    <meta name="description" value="descripción"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">

@endsection

@section('headers')
@endsection

@section('banner')
    <figure>
        <img src="{{ asset('assets/img/banner.jpg') }}" alt="Gaceta Universitaria"/>
    </figure>
@endsection

@section('header-text')
    <section class="header-text">
        <h1>Gaceta virtual universitaria</h1>
        <p class="text-columns">
            La Gaceta  es una publicación mensual de carácter informativo, en cuyo contenido se da cuenta de las actividades sustantivas desplegadas por alumnos, docentes e investigadores, además de la administración central de la Universidad Autónoma del Estado de Morelos (UAEM).
        </p>
    </section>

    <section class="header-number">
        <h2 class="text-left">Gaceta No <span class="text-big"> 448 | Feb 2015</span></h2>
    </section>
@endsection

@section('breadcrumb')

@endsection


@section('content')
    <section class="main-content">

        <div class="fondo-index">
            <p>Esta publicación es realizada por el Departamento de Redacción de la Dirección General de Comunicación, que a su vez depende de la Secretaría de Extensión. La fecha de aparición de Gaceta es el día 15 de cada mes. Se imprimen seis mil ejemplares que son distribuidos entre la comunidad universitaria en todos los campus, sedes regionales, institutos, escuelas y facultades de la institución, e instancias externas.
            </p>
         {{--    <a href="#" class="btn ">ver más</a>--}}
        </div>

        <div class="large-10 columns main-post">
            @if(! empty($last_post->image))
            <figure class="img-box"><img src="uploads/posts/{{ $last_post->image }}" alt="{{$last_post->title}}"/></figure>
            @endif
            <div class="row">
                <div class="post-title">
                    <h2><a href="{{ route('post', [$last_post->section()->first()->slug_url, $last_post->slug_url, $last_post->id] ) }}">{{$last_post->title}}</a></h2>
                </div>
                <div class="post-author">@if(! empty($last_post->authored_by)) | @endif   {{ date('M j, Y', strtotime($last_post->created_at)) }} </div>
                <p class="">{{ $last_post->meta_description }}</p>
            </div>
        </div>
        <div class="large-6 columns">
            <h2>Notas</h2>
            <ul class="notas-home-destacadas">
                @foreach($lastest_posts as $last_post)
                    <li><a href="{{ route('post', [$last_post->section()->first()->slug_url, $last_post->slug_url, $last_post->id]) }}">{{ $last_post->title }}</a></li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="main-content">
        <div class="searchbox large-6 columns">
            <h3 class="section-pleca">Búsqueda</h3>

            {{ Form::open(['route' => 'search', 'method' => 'POST', 'role' => 'form', 'class' => 'busqueda-de-gaceta']) }}

                <div class="large-16 columns control padding-0">
                    <label for="numero_gaceta">Titulo</label>
                    {{ Form::text('title'); }}
                </div>
                <div class="large-8 columns padding-0">
                    <label for="fecha_evento">Fecha del evento</label>
                    <input type="text" placeholder="dd-mm-yyyy" name="date"  class="datepicker"/>
                </div>
                <div class="large-8 columns ">
                    <label for="autor">Autor</label>
                    {{ Form::text('author'); }}
                </div>
                <div class="large-16 columns control padding-0">
                    <label for="categoria">Categoría</label>
                    <select name="section">
                        <option value="">...</option>
                        <option value="1">Gestión</option>
                        <option value="2">Docencia</option>
                        <option value="3">Investigación</option>
                        <option value="4">Estensión</option>
                        <option value="5">Anuncios</option>
                        <option value="6">Colaboraciones</option>
                        <option value="7">Galería de fotos</option>
                        <option value="8">Gaceta</option>
                    </select>
                </div>
                <button class="btn" type="submit"> Buscar</button>

            {{ Form::close(); }}
            <div class="section-mas-leido">
                <h2>Más leidos</h2>
                <ul class="list-masleidos pleca-sombra-276">
                    @foreach($most_views_posts as $most_view_post)
                    <li><a href="{{ route('post', [$most_view_post->section()->first()->slug_url, $most_view_post->slug_url, $most_view_post->id]) }}" class="title-post">{{ $most_view_post->title }} </a>

                        <div class="author">
                            @if(! empty($most_view_post->authored_by)))
                                <div>{{$most_view_post->authored_by}} </div>
                            @endif
                                {{ date('M j, Y', strtotime($most_view_post->created_at)) }}
                        </div>
                        <a href="{{ route('post', [$most_view_post->section()->first()->slug_url, $most_view_post->slug_url, $most_view_post->id]) }}" class="btn">ver noticia</a>
                    </li>
                    @endforeach

                </ul>
            </div>
            {{--
            <div>
                <h2>Gacetas anteriores</h2>
                <ul class="list-masleidos gacetas-anteriores pleca-sombra-276">
                    <li><div class="large-4 columns"><span class="gaceta-numero"> 433</span>Ene 2015</div>
                        <div class="large-12 columns">
                            <strong>En portada</strong><br>
                            <a href="#">Arranca la obra del claustro universitario en Axochiapan </a><br/>
                            <a href="#" class="btn">ver gaceta completa</a>
                        </div>
                    </li>

                    <li><div class="large-4 columns"><span class="gaceta-numero"> 433</span>Ene 2015</div>
                        <div class="large-12 columns">
                            <strong>En portada</strong><br>
                            <a href="#">Arranca la obra del claustro universitario en Axochiapan </a><br/>
                            <a href="#" class="btn">ver gaceta completa</a>
                        </div>
                    </li>

                    <li><div class="large-4 columns"><span class="gaceta-numero"> 433</span>Ene 2015</div>
                        <div class="large-12 columns">
                            <strong>En portada</strong><br>
                            <a href="#">Arranca la obra del claustro universitario en Axochiapan </a><br/>
                            <a href="#" class="btn">ver gaceta completa</a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="row pleca-sombra-276" >
                <h2>Galeria</h2>
                <figure class="large-5 columns"><img src="{{ asset('assets/img/galeria-thumb.jpg') }}" alt=""/></figure>
                <figure class="large-5 columns"><img src="{{ asset('assets/img/galeria-thumb2.jpg') }}" alt=""/></figure>
                <figure class="large-5 columns"><img src="{{ asset('assets/img/galeria-thumb.jpg') }}" alt=""/></figure>
                <figure class="large-5 columns"><img src="{{ asset('assets/img/galeria-thumb.jpg') }}" alt=""/></figure>
                <figure class="large-5 columns"><img src="{{ asset('assets/img/galeria-thumb2.jpg') }}" alt=""/></figure>
                <figure class="large-5 columns"><img src="{{ asset('assets/img/galeria-thumb.jpg') }}" alt=""/></figure>
            </div>
            --}}

        </div>
        <div class="large-10 columns row section-list-sections">
            <h2 class="title-section aqua"><span class="box-section aqua"></span>{{ $investigacion->title }}</h2>

            @foreach($investigacion_posts as $post)
            <div class="large-8 columns">
               <a   href="{{ route('post', [$post->section()->first()->slug_url, $post->slug_url, $post->id]) }}"> <h3 class="title-post-section aqua">{{$post->title}}</h3></a>
                <div class="fecha-post"> {{ date('M j, Y', strtotime($post->created_at)) }}</div>
                @if(! empty($post->image))
                <figure><img src="uploads/posts/{{ $post->image }}" alt=""/></figure>
                @endif
                <p class="post-description">{{$post->meta_description}}</p>
                <div class="footer-post">
                    {{ $investigacion->title }}
                </div>
            </div>

            @endforeach

            <div class="clearfix"></div>

            <h2 class="title-section green"><span class="box-section green"></span>{{ $extension->title }}</h2>

            @foreach($extension_posts as $post)
                <div class="large-8 columns">
                    <a   href="{{ route('post', [$post->section()->first()->slug_url, $post->slug_url, $post->id]) }}"> <h3 class="title-post-section green">{{$post->title}}</h3></a>
                    <div class="fecha-post"> {{ date('M j, Y', strtotime($post->created_at)) }}</div>
                    @if(! empty($post->image))
                        <figure><img src="uploads/posts/{{ $post->image }}" alt=""/></figure>
                    @endif
                        <p class="post-description">{{$post->meta_description}}</p>
                        <div class="footer-post">
                            {{ $extension->title }}
                        </div>
                </div>

            @endforeach

            <div class="clearfix"></div>

            <h2 class="title-section mora"><span class="box-section mora"></span>{{ $gestion->title }}</h2>

            @foreach($gestion_posts as $post)
                <div class="large-8 columns">
                    <a   href="{{ route('post', [$post->section()->first()->slug_url, $post->slug_url, $post->id]) }}"> <h3 class="title-post-section mora">{{$post->title}}</h3></a>
                    <div class="fecha-post"> {{ date('M j, Y', strtotime($post->created_at)) }}</div>
                    @if(! empty($post->image))
                        <figure><img src="uploads/posts/{{ $post->image }}" alt=""/></figure>
                    @endif
                    <p class="post-description">{{$post->meta_description}}</p>
                    <div class="footer-post">
                        {{ $gestion->title }}
                    </div>
                </div>
            @endforeach

        </div>
    </section>
@endsection

@section('scripts')
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>

    <script src="{{ asset('assets/admin/js/jquery-ui-1.10.3.min.js') }}" type="text/javascript" ></script>

    <script type="text/javascript">
        $(function() {
            $( ".datepicker" ).datepicker();
        });
    </script>
@endsection