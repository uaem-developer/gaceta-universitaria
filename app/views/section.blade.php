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
        <h1 class="large-4 columns txt-center">Investigación</h1>
        <p class="text-columns large-12 columns">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam est molestias, nihil placeat quisquam quos ratione repellat reprehenderit. Cum eum hic nobis non repellendus sint temporibus unde veritatis voluptas!
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, quas, similique. Ipsum necessitatibus, nobis odit porro ratione vero. Hic incidunt ipsa iusto maiores minima obcaecati placeat quas suscipit tempora totam?
        </p>
    </section>
@endsection

@section('breadcrumb')
    <ul class="breadcrumb">
        <li><a href="#">Inicio</a></li>
        <li>|</li>
        <li><a href="#">Investigación y Académia</a></li>
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
            <div class="large-8 columns">
                <h3>Primer piedra del claustro universitario Miacatlán</h3>
                <div class="detail-post">
                    Enero 6 2015 | Gaceta No 433 | Académia e Investigación
                </div>
                <div class="row">
                    <div class="large-8 columns">
                        <figure>
                            <img src="{{ asset('assets/img/section-image.jpg') }}" alt=""/>
                        </figure>
                    </div>
                    <div class="large-8 columns">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consectetur distinctio enim est ipsa laborum maxime minus mollitia nam odio quas quo recusandae reiciendis rem rerum saepe tempore vel, voluptas.</p>
                    </div>
                </div>
            </div>

            <div class="large-8 columns">
                <h3>Primer piedra del claustro universitario Miacatlán</h3>
                <div class="detail-post">
                    Enero 6 2015 | Gaceta No 433 | Académia e Investigación
                </div>
                <div class="row">
                    <div class="large-8 columns">
                        <figure>
                            <img src="{{ asset('assets/img/section-image.jpg') }}" alt=""/>
                        </figure>
                    </div>
                    <div class="large-8 columns">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consectetur distinctio enim est ipsa laborum maxime minus mollitia nam odio quas quo recusandae reiciendis rem rerum saepe tempore vel, voluptas.</p>
                    </div>
                </div>
            </div>

            <div class="large-8 columns">
                <h3>Primer piedra del claustro universitario Miacatlán</h3>
                <div class="detail-post">
                    Enero 6 2015 | Gaceta No 433 | Académia e Investigación
                </div>
                <div class="row">
                    <div class="large-8 columns">
                        <figure>
                            <img src="{{ asset('assets/img/section-image.jpg') }}" alt=""/>
                        </figure>
                    </div>
                    <div class="large-8 columns">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consectetur distinctio enim est ipsa laborum maxime minus mollitia nam odio quas quo recusandae reiciendis rem rerum saepe tempore vel, voluptas.</p>
                    </div>
                </div>
            </div>

            <div class="large-8 columns">
                <h3>Primer piedra del claustro universitario Miacatlán</h3>
                <div class="detail-post">
                    Enero 6 2015 | Gaceta No 433 | Académia e Investigación
                </div>
                <div class="row">
                    <div class="large-8 columns">
                        <figure>
                            <img src="{{ asset('assets/img/section-image.jpg') }}" alt=""/>
                        </figure>
                    </div>
                    <div class="large-8 columns">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consectetur distinctio enim est ipsa laborum maxime minus mollitia nam odio quas quo recusandae reiciendis rem rerum saepe tempore vel, voluptas.</p>
                    </div>
                </div>
            </div>

            <div class="large-8 columns">
                <h3>Primer piedra del claustro universitario Miacatlán</h3>
                <div class="detail-post">
                    Enero 6 2015 | Gaceta No 433 | Académia e Investigación
                </div>
                <div class="row">
                    <div class="large-8 columns">
                        <figure>
                            <img src="{{ asset('assets/img/section-image.jpg') }}" alt=""/>
                        </figure>
                    </div>
                    <div class="large-8 columns">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consectetur distinctio enim est ipsa laborum maxime minus mollitia nam odio quas quo recusandae reiciendis rem rerum saepe tempore vel, voluptas.</p>
                    </div>
                </div>
            </div>

            <div class="large-8 columns">
                <h3>Primer piedra del claustro universitario Miacatlán</h3>
                <div class="detail-post">
                    Enero 6 2015 | Gaceta No 433 | Académia e Investigación
                </div>
                <div class="row">
                    <div class="large-8 columns">
                        <figure>
                            <img src="{{ asset('assets/img/section-image.jpg') }}" alt=""/>
                        </figure>
                    </div>
                    <div class="large-8 columns">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consectetur distinctio enim est ipsa laborum maxime minus mollitia nam odio quas quo recusandae reiciendis rem rerum saepe tempore vel, voluptas.</p>
                    </div>
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