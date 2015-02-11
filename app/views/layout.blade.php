<!DOCTYPE html>
<html>
<head lang="es">
    <meta charset="UTF-8">

    @yield('headers')

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700|Open+Sans"/>

    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}"/>

    @yield('styles')
</head>
<body>
<header>
    <section class="main-wrapper">

        @yield('banner')

    </section>
</header>
<section class="main-wrapper">
    <nav class="menu">
        <ul>
            <li><a href="{{ route('home') }}" title="Home">Home</a></li>
            <li><a href="{{ route('section', 'gestion') }}" title="Gestión">Gestión</a></li>
            <li><a href="{{ route('section', 'docencia') }}" title="Docencia">Docencia</a></li>
            <li><a href="{{ route('section', 'investigacion') }}" title="Investigación">Investigación</a></li>
            <li><a href="{{ route('section', 'extension') }}" title="Extensión">Extensión</a></li>
            <li><a href="{{ route('section', 'anuncios') }}" title="Extensión">Anuncios</a></li>
            <li><a href="{{ route('section', 'colaboraciones') }}" title="Anuncios">Colaboraciones</a></li>
            <li><a href="{{ route('section', 'galeria-de-fotos') }}" title="Anuncios">Galería de fotos</a></li>
        </ul>
    </nav>

    @yield('header-text')

    @yield('breadcrumb')

    @yield('content')

</section>
<footer>
    <div class="row footer-links">
        <div class="large-4 columns">
            <h4>Gestión</h4>
            <ul class="footer-list">
                <li>+ Primer piedra del claustro universitario en Miacatlán</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
            </ul>
        </div>
        <div class="large-4 columns">
            <h4>Docencia</h4>
            <ul class="footer-list">
                <li>+ Primer piedra del claustro universitario en Miacatlán</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
            </ul>
        </div>
        <div class="large-4 columns">
            <h4>Investigación</h4>
            <ul class="footer-list">
                <li>+ Primer piedra del claustro universitario en Miacatlán</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
            </ul>
        </div>
        <div class="large-4 columns">
            <h4>Extensión</h4>
            <ul class="footer-list">
                <li>+ Primer piedra del claustro universitario en Miacatlán</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
            </ul>
        </div>
    </div>
</footer>

@yield('scripts')

</body>
</html>