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
            <li><a href="#" title="Home">Home</a></li>
            <li><a href="#" title="Gestión">Gestión</a></li>
            <li><a href="#" title="Docencia">Docencia</a></li>
            <li><a href="#" title="Investigación">Investigación</a></li>
            <li><a href="#" title="Extensión">Extensión</a></li>
            <li><a href="#" title="Extensión">Extensión</a></li>
            <li><a href="#" title="Anuncios">Anuncios</a></li>
        </ul>
    </nav>

    @yield('header-text')

    @yield('breadcrumb')

    @yield('content')

</section>
<footer>
    <div class="row footer-links">
        <div class="large-4 columns">
            <h4>lorem ipsum</h4>
            <ul class="footer-list">
                <li>+ Primer piedra del claustro universitario en Miacatlán</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
            </ul>
        </div>
        <div class="large-4 columns">
            <h4>lorem ipsum</h4>
            <ul class="footer-list">
                <li>+ Primer piedra del claustro universitario en Miacatlán</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
            </ul>
        </div>
        <div class="large-4 columns">
            <h4>lorem ipsum</h4>
            <ul class="footer-list">
                <li>+ Primer piedra del claustro universitario en Miacatlán</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
                <li>+ Primer piedra del claustro universitario en Miacatlá</li>
            </ul>
        </div>
        <div class="large-4 columns">
            <h4>lorem ipsum</h4>
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