<!DOCTYPE html>
<html>
<head lang="es">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1 ,maximum-scale=1" />

    @yield('headers')

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700|Open+Sans"/>
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.sidr.dark.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}"/>

    @yield('styles')

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-59735058-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<body>

<header>
    @yield('top-icons')

    <div id="mobile-header">
        <a id="responsive-menu-button" href="#sidr-main">Menú</a>
    </div>

    <section class="main-wrapper">
        @yield('banner')
    </section>
</header>
<section class="main-wrapper">
    <div id="navigation">
        <nav class="menu nav">
            <ul>
                <li><a href="{{ route('home') }}" title="Inicio">Inicio</a></li>
                <li><a href="{{ route('section', 'gestion') }}" title="Gestión">Gestión</a></li>
                <li><a href="{{ route('section', 'docencia') }}" title="Docencia">Docencia</a></li>
                <li><a href="{{ route('section', 'investigacion') }}" title="Investigación">Investigación</a></li>
                <li><a href="{{ route('section', 'extension') }}" title="Extensión">Extensión</a></li>
                <li><a href="{{ route('section', 'anuncios') }}" title="Extensión">Anuncios</a></li>
                <li><a href="{{ route('section', 'colaboraciones') }}" title="Anuncios">Colaboraciones</a></li>
                <li><a href="{{ route('section', 'galeria-de-fotos') }}" title="Anuncios">Galería de fotos</a></li>
                <li><a href="{{ route('section', 'gaceta') }}" title="Anuncios">Gaceta</a></li>
            </ul>
        </nav>
    </div>

    @yield('header-text')

    @yield('breadcrumb')

    @yield('content')

</section>
<footer>
    <div class="row footer-links">
        <div class="large-2 columns"><h4><a href="{{ route('home') }}" title="Inicio">Inicio</a></h4></div>
        <div class="large-2 columns"><h4><a href="{{ route('section', 'gestion') }}" title="Gestión">Gestión</a></h4></div>
        <div class="large-2 columns"><h4><a href="{{ route('section', 'docencia') }}" title="Docencia">Docencia</a></h4></div>
        <div class="large-2 columns"><h4><a href="{{ route('section', 'investigacion') }}" title="Investigación">Investigación</a></h4></div>
        <div class="large-2 columns"><h4><a href="{{ route('section', 'extension') }}" title="Extensión">Extensión</a></h4></div>
        <div class="large-2 columns"><h4><a href="{{ route('section', 'anuncios') }}" title="Extensión">Anuncios</a></h4></div>
        <div class="large-2 columns"><h4><a href="{{ route('section', 'colaboraciones') }}" title="Anuncios">Colaboraciones</a></h4></div>
        <div class="large-2 columns"><h4><a href="{{ route('section', 'gaceta') }}" title="Anuncios">Gaceta</a></h4></div>
    </div>
</footer>

<!-- jQuery library (served from Google) -->
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>

<script src="{{ asset('assets/js/jquery.sidr.min.js') }}"></script>
<script type="text/javascript">
    $('#responsive-menu-button').sidr({
        name: 'sidr-main',
        source: '#navigation'
    });
</script>
@yield('scripts')

</body>
</html>