<!DOCTYPE html>
<html>
<head lang="es">
    <meta charset="UTF-8">
    <title>Gaceta Universitaria</title>
    <meta name="description" content="Gaceta universitaria">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700|Open+Sans"/>

    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}"/>
</head>
<body>
<header>
    <section class="main-wrapper">
        <figure>
            <img src="{{ asset('assets/img/banner.jpg') }}" alt="Gaceta Universitaria"/>
        </figure>

    </section>
</header>
<section class="main-wrapper">
    <nav class="menu">
        <ul>
            <li><a href="#" title="Home">Home</a></li>
            <li><a href="#" title="Gestión">Gestión</a></li>
            <li><a href="#" title="Docencia">Docencia</a></li>
            <li><a href="#" title="Investigación">Investigación</a></li>
            <li><a href="#" title="Extensión">Extensión</a></li>
            <li><a href="#" title="Extensión">Extensión</a></li>
            <li><a href="#" title="Anuncios">Anuncios</a></li>
        </ul>
    </nav>

    <section class="header-text">
        <h1>Gaceta Universitaria</h1>
        <p class="text-columns">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam est molestias, nihil placeat quisquam quos ratione repellat reprehenderit. Cum eum hic nobis non repellendus sint temporibus unde veritatis voluptas!
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, quas, similique. Ipsum necessitatibus, nobis odit porro ratione vero. Hic incidunt ipsa iusto maiores minima obcaecati placeat quas suscipit tempora totam?
        </p>
    </section>
    <section class="header-number">
        <h2 class="text-left">Gaceta No <span class="text-big"> 434 | Feb 2015</span></h2>
    </section>
    <section class="main-content">

        <div class="fondo-index">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci ducimus illum inventore veniam. Deserunt maxime nobis quibusdam ullam! Consequatur, dignissimos, repellat. Cumque dolor dolorem illum inventore nostrum porro, quos sequi?</p>
            <a href="#" class="btn ">ver más</a>
        </div>

        <div class="large-10 columns">
            <figure class="img-box"><img src="{{ asset('assets/img/imagen-post.jpg') }}" alt="Imagen del post"/></figure>
            <div class="row">
                <div class="post-title">
                    <div class="large-3 columns gaceta-title-sub"><span class="gaceta-numero">433</span> Feb 2015</div>
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
</section>
<footer>
    <div class="row">
        <div class="large-4 columns">
            <h4>lorem ipsum</h4>
            <ul>
                <li>Primer piedra del claustro universitario en Miacatlán</li>
                <li>Primer piedra del claustro universitario en Miacatlá</li>
                <li>Primer piedra del claustro universitario en Miacatlá</li>
                <li>Primer piedra del claustro universitario en Miacatlá</li>
                <li>Primer piedra del claustro universitario en Miacatlá</li>
            </ul>
        </div>
        <div class="large-4 columns">
            <h4>lorem ipsum</h4>
            <ul>
                <li>Primer piedra del claustro universitario en Miacatlán</li>
                <li>Primer piedra del claustro universitario en Miacatlá</li>
                <li>Primer piedra del claustro universitario en Miacatlá</li>
                <li>Primer piedra del claustro universitario en Miacatlá</li>
                <li>Primer piedra del claustro universitario en Miacatlá</li>
            </ul>
        </div>
        <div class="large-4 columns">
            <h4>lorem ipsum</h4>
            <ul>
                <li>Primer piedra del claustro universitario en Miacatlán</li>
                <li>Primer piedra del claustro universitario en Miacatlá</li>
                <li>Primer piedra del claustro universitario en Miacatlá</li>
                <li>Primer piedra del claustro universitario en Miacatlá</li>
                <li>Primer piedra del claustro universitario en Miacatlá</li>
            </ul>
        </div>
        <div class="large-4 columns">
            <h4>lorem ipsum</h4>
            <ul>
                <li>Primer piedra del claustro universitario en Miacatlán</li>
                <li>Primer piedra del claustro universitario en Miacatlá</li>
                <li>Primer piedra del claustro universitario en Miacatlá</li>
                <li>Primer piedra del claustro universitario en Miacatlá</li>
                <li>Primer piedra del claustro universitario en Miacatlá</li>
            </ul>
        </div>
    </div>
</footer>
</body>
</html>