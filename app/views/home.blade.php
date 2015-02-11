@extends('layout')

@section('headers')
    <title>Gaceta Universitaria</title>
    <meta name="description" value="descripción"/>
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

        <div class="large-10 columns">
            <figure class="img-box"><img src="{{ asset('assets/img/imagen-post.jpg') }}" alt="Imagen del post"/></figure>
            <div class="row">
                <div class="post-title">
                    <div class="large-3 columns gaceta-title-sub">
                        <span class="gaceta-numero">433</span>

                        Feb 2015</div>
                    <div class="large-13 columns"><h2><a href="#">Marcha  UAEM en apoyo a normalistas de Ayotzinapa</a></h2></div>
                </div>
                <div class="post-author">Salvador Rivera | Enero 6 2014 | Gaceta No.433</div>
                <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consequatur, doloremque dolorum error eveniet fuga id in iusto, neque nihil odit officia officiis pariatur placeat quas rem, tempora velit voluptatibus.</p>
            </div>
        </div>
        <div class="large-6 columns">
            <h2>Notas</h2>
            <ul class="notas-home-destacadas">
                <li><a href="#">Arranca obra del claustro universitario en axochiapan</a></li>
                <li><a href="#">Bolivar Zapata y Rodolfo    Dirzo   recibiran doctorado Honoris Causa</a></li>
                <li><a href="#">Analizan caso ayotzinapan en foro informativo</a></li>
                <li><a href="#">Cátedra en memoria de Ignacio Martín Baró</a></li>
                <li><a href="#">Arranca obra del claustro universitario en axochiapan</a></li>
                <li><a href="#">Bolivar Zapata y Rodolfo    Dirzo   recibiran doctorado Honoris Causa</a></li>
                <li><a href="#">Analizan caso ayotzinapan en foro informativo</a></li>
                <li><a href="#">Cátedra en memoria de Ignacio Martín Baró</a></li>
                <li><a href="#">Arranca obra del claustro universitario en axochiapan</a></li>
                <li><a href="#">Bolivar Zapata y Rodolfo    Dirzo   recibiran doctorado Honoris Causa</a></li>
            </ul>
        </div>
    </section>

    <section class="main-content">
        <div class="searchbox large-6 columns">
            <h3 class="section-pleca">Búsqueda</h3>

            <form action="busqueda-de-gaceta" class="busqueda-de-gaceta">
                <div class="large-16 columns control">
                    <label for="numero_gaceta">No Gaceta</label>
                    <input type="text" name="numero_gaceta"/>
                </div>
                <div class="large-8 columns ">
                    <label for="fecha_evento">Fecha del evento</label>
                    <input type="text" name="fecha_evento" class="datepicker"/>
                </div>
                <div class="large-8 columns ">
                    <label for="autor">Autor</label>
                    <input type="text" name="autor"/>
                </div>
                <div class="large-16 columns control">
                    <label for="categoria">Categoría</label>
                    <input type="text" name="categoria"/>
                </div>
                <button class="btn" type="submit"> Buscar</button>
            </form>

            <div >
                <h2>Más leidos</h2>
                <ul class="list-masleidos pleca-sombra-276">
                    <li><a href="#" class="title-post">Arranca la obra del claustro universitario en Axochiapan </a>
                        <div class="author">Por Salvador Rivera <br/>Enero 6, 2015| Gaceta No 433 Gestión</div>
                        <a href="#" class="btn">ver noticia</a>
                    </li>
                    <li><a href="#" class="title-post">continua la construccion en la Facultad  de Ciencias Químicas e Ingeniería </a>
                        <div class="author">Por Salvador Rivera <br/>Enero 6, 2015| Gaceta No 433 Gestión</div>
                        <a href="#" class="btn">ver noticia</a>
                    </li>
                    <li><a href="#" class="title-post">Arranca la obra del claustro universitario en Axochiapan </a>
                        <div class="author">Por Salvador Rivera <br/>Enero 6, 2015| Gaceta No 433 Gestión</div>
                        <a href="#" class="btn">ver noticia</a>
                    </li>
                </ul>
            </div>
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
        </div>
        <div class="large-10 columns row">
            <h2 class="title-section aqua"><span class="box-section aqua"></span>Academia e Investigación</h2>

            <div class="large-8 columns">
                <h3 class="title-post-section aqua">Primer piedra del claustro universitario en Miacatlán</h3>
                <div class="fecha-post">Enero 6 2015|Gaceta N o433</div>
                <figure><img src="{{ asset('assets/img/interiores.jpg') }}" alt=""/></figure>
                <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, nemo, quisquam. Cumque doloremque fugiat necessitatibus numquam, perspiciatis tenetur ullam veritatis voluptate! A aperiam culpa ducimus error iure natus recusandae temporibus.</p>
                <div class="footer-post">
                    Academia e investigación
                </div>
            </div>
            <div class="large-8 columns">
                <h3 class="title-post-section aqua">Primer piedra del claustro universitario en Miacatlán</h3>
                <div class="fecha-post">Enero 6 2015|Gaceta N o433</div>
                <figure><img src="{{ asset('assets/img/interiores.jpg') }}" alt=""/></figure>
                <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, nemo, quisquam. Cumque doloremque fugiat necessitatibus numquam, perspiciatis tenetur ullam veritatis voluptate! A aperiam culpa ducimus error iure natus recusandae temporibus.</p>
                <div class="footer-post">
                    Academia e investigación
                </div>
            </div>

            <div class="clearfix"></div>
            <h2 class="title-section green"><span class="box-section green"></span>Extención</h2>
            <div class="large-8 columns">
                <h3 class="title-post-section green">Primer piedra del claustro universitario en Miacatlán</h3>
                <div class="fecha-post">Enero 6 2015|Gaceta N o433</div>
                <figure><img src="{{ asset('assets/img/interiores.jpg') }}" alt=""/></figure>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, nemo, quisquam. Cumque doloremque fugiat necessitatibus numquam, perspiciatis tenetur ullam veritatis voluptate! A aperiam culpa ducimus error iure natus recusandae temporibus.</p>
                <div class="footer-post">
                    Extención
                </div>
            </div>
            <div class="large-8 columns">
                <h3 class="title-post-section green">Primer piedra del claustro universitario en Miacatlán</h3>
                <div class="fecha-post">Enero 6 2015|Gaceta N o433</div>
                <figure><img src="{{ asset('assets/img/interiores.jpg') }}" alt=""/></figure>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, nemo, quisquam. Cumque doloremque fugiat necessitatibus numquam, perspiciatis tenetur ullam veritatis voluptate! A aperiam culpa ducimus error iure natus recusandae temporibus.</p>
                <div class="footer-post">
                    Extención
                </div>
            </div>

            <div class="clearfix"></div>

            <h2 class="title-section mora"><span class="box-section mora"></span>Gestión</h2>
            <div class="large-8 columns">
                <h3 class="title-post-section mora">Primer piedra del claustro universitario en Miacatlán</h3>
                <div class="fecha-post">Enero 6 2015|Gaceta N o433</div>
                <figure><img src="{{ asset('assets/img/interiores.jpg') }}" alt=""/></figure>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, nemo, quisquam. Cumque doloremque fugiat necessitatibus numquam, perspiciatis tenetur ullam veritatis voluptate! A aperiam culpa ducimus error iure natus recusandae temporibus.</p>
                <div class="footer-post">
                    Gestión
                </div>
            </div>
            <div class="large-8 columns">
                <h3 class="title-post-section mora">Primer piedra del claustro universitario en Miacatlán</h3>
                <div class="fecha-post">Enero 6 2015|Gaceta N o433</div>
                <figure><img src="{{ asset('assets/img/interiores.jpg') }}" alt=""/></figure>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, nemo, quisquam. Cumque doloremque fugiat necessitatibus numquam, perspiciatis tenetur ullam veritatis voluptate! A aperiam culpa ducimus error iure natus recusandae temporibus.</p>
                <div class="footer-post">
                    Gestión
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')

@endsection