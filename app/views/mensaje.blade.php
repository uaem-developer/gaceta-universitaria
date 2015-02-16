@extends('layout')

@section('headers')
    <title>Gaceta UAEM Virtual mensaje rector</title>
    <meta name="description" value="A casi veinte años del inicio de la Gaceta UAEM, una publicación emblemática del quehacer cotidiano de la comunidad de la máxima casa de estudios del estado, celebro presentar el primer número mensual de la Gaceta UAEM"/>
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

        <div class="title-post">
            <h1>Gaceta UAEM Virtual mensaje rector</h1>
        </div>


        <div class="content-post">
          <p>  A casi veinte años del inicio de la Gaceta UAEM, una publicación emblemática

            del quehacer cotidiano de la comunidad de la máxima casa de estudios del

            estado, celebro presentar el primer número mensual de la Gaceta UAEM

            Virtual, a través de la cual no sólo habremos de ampliar y enriquecer los

            contenidos de la versión impresa, sino más aún daremos un renovado impulso

            a los procesos comunicativos universitarios, orientados a promover el diálogo

            de saberes, la reflexión crítica, los encuentros interculturales y la apertura

            inclusiva de espacios solidarios y libertarios en los que se expresen las voces

            de las y los jóvenes, tanto como las de las comunidades, pueblos,

            organizaciones sociales y grupos en condiciones de vulnerabilidad y

            marginación.</p>

            <p>

            Ante la actual crisis civilizatoria que todos padecemos, provocada por un

            modelo económico excluyente, empobrecedor y desintegrador de las relaciones

            y capacidades humanas, sociales y naturales, no menos que del propio Estado

            y sus instituciones, pues es un modelo que sólo sirve al interés acaparador de

            la riqueza, hoy la Universidad Autónoma del Estado de Morelos, una

            universidad socialmente responsable, se halla inmersa en la construcción de

            los futuros que imaginamos y queremos en tanto sujetos conscientes y

            comprometidos en la transformación histórica de las condiciones opresivas que

            obstaculizan la consecución de un desarrollo por la paz, la justicia y la

            seguridad integral de la población, que haga posible el disfrute de una vida

            digna y compartida, esencia constitutiva del ejercicio pleno de los derechos

            humanos.</p>
            <p>

            Es en este contexto de mutua vinculación solidaria y coparticipativa con los

            entornos comunitarios del estado, como damos significado vivencial a los

            valores que sustentan la labor que realiza nuestra institución educativa, a

            través del desarrollo de sus funciones de formación, investigación, extensión y

            gestión, dentro de las cuales la comunicación universitaria contribuye al

            fortalecimiento de estas interacciones fundamentales entre la comunidad de la

            UAEM y las colectividades morelenses.
            </p>
            <p>

            Al atender a este propósito, esta nueva versión de la Gaceta abre otros

            accesos a más personas, sobre todo jóvenes, cuya presencia en internet y las

            redes sociales  se incrementa día a día, dada la disponibilidad que tienen estos

            medios para facilitar los intercambios de información y las relaciones humanas,

            más allá de las distancias geográficas y culturales. Hago votos para que la

            Gaceta UAEM Virtual se convierta en un referente acreditado de participación

            colectiva, donde sus lectores colaboren con sus opiniones y reflexiones.
            </p>

            <div class="txt-center">
                Jesús Alejandro Vera Jiménez
                <br/>
                Rector
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