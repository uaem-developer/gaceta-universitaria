@extends('layout')

@section('headers')
    <title>Gaceta virtual universitaria</title>
    <meta name="description" value="descripción" value="A 20 años de creada, la Gaceta UAEM, abre un nuevo espacio que hemos denominado Gaceta Virtual, para difundir las actividades de la comunidad universitaria..."/>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">

    <!-- FACEBOOK OPEN GRAPH -->
    <meta property="og:title" content="Gaceta virtual universitaria" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ route('home') }}" />
    <meta property="og:image" content="http://www.uaem.mx/gacetavirtual/assets/img/banner.jpg" />
    <meta property="og:site_name" content="Gaceta virtual universitaria" />
    <meta property="og:description"
          content="A 20 años de creada, la Gaceta UAEM, abre un nuevo espacio que hemos denominado Gaceta Virtual, para difundir las actividades de la comunidad universitaria..."/>

@endsection

@section('top-icons')
   <div class="main-wrapper top-icons">
        <div class="right">
            <img src="{{ asset('assets/img/uaem-logo.png') }}" width="136" alt=""/>
            <img src="{{ asset('assets/img/distintivo-empresa-incluyente.png') }}" width="107" alt=""/>
        </div>
   </div>
@endsection

@section('banner')

    <figure>
        <img src="{{ asset('assets/img/banner.jpg') }}" alt="Gaceta Universitaria"/>
    </figure>
@endsection

@section('header-text')

    <section class="header-number">
        <h2 class="text-left">Gaceta UAEM Virtual  No <span class="text-big"> 2 | Mar 2015</span></h2>
    </section>


@endsection

@section('breadcrumb')

@endsection

@section('content')
    <section class="main-content">

        <div class="fondo-index">
            <h2 class="white">Gaceta UAEM Virtual</h2>

            <p>
                A 20 años de creada, la Gaceta UAEM, abre un nuevo espacio que hemos

                denominado Gaceta Virtual, para difundir las actividades de la comunidad

                universitaria, en el que además de la información que aparece en la versión

                impresa, podrá encontrarse mayor cantidad de notas y fotografías, además de

                reportajes, colaboraciones, galería de imágenes, anuncios de la agenda

                universitaria, así como otros textos que iremos incrementando en los próximos

                números.

                Con esta publicación pretendemos atender la creciente demanda de difusión

                informativa y enriquecer los contenidos de sus páginas, dadas las limitaciones

                de disponibilidad de espacio que presenta la versión impresa. Con ello también

                mantenemos su calidad sin afectar el presupuesto asignado para la misma.

                Les recordamos que la Gaceta continuará a su disposición en formato impreso y

                en PDF en la página www.uaem.mx, mientras que la Gaceta Virtual podrá

                consultarse en:

                <a href="www.uaem.mx/gacetavirtual" class="white" >www.uaem.mx/gacetavirtual</a>

            </p>

        </div>

        <section class="suscribete">
            <!-- Begin MailChimp Signup Form -->
            <link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
            <style type="text/css">
                #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
            </style>
            <div id="mc_embed_signup">
                <form action="//uaem.us10.list-manage.com/subscribe/post?u=59d2270f7f63084860858fe92&amp;id=51c97697dc" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
                        <h2>Suscríbete al Boletín Electrónico UAEM</h2>
                        <div class="indicates-required"><span class="asterisk">*</span> Campo obligatorio</div>
                        <div class="mc-field-group">
                            <label for="mce-EMAIL">Correo electrónico   <span class="asterisk">*</span>
                            </label>
                            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                        </div>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;"><input type="text" name="b_59d2270f7f63084860858fe92_51c97697dc" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Suscríbete" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                    </div>
                </form>
            </div>
            <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
            <!--End mc_embed_signup-->
        </section>

        <div class="large-10 columns main-post">
            @if(! empty($last_post->image))
                <figure class="img-box"><img src="uploads/posts/{{ $last_post->image }}" alt="{{$last_post->title}}"/></figure>
            @else
                <figure class="img-box"><img src="{{ asset('assets/img/uaem-logo.jpg') }}" alt="{{$last_post->title}}"/></figure>
            @endif
            <div class="row">
                <div class="post-title">
                    <h2><a href="{{ route('post', [$last_post->section()->first()->slug_url, $last_post->slug_url, $last_post->id] ) }}">{{$last_post->title}}</a></h2>
                </div>
                <div class="post-author">@if(! empty($last_post->authored_by)) | @endif   {{ date('M j, Y', strtotime($last_post->created_at)) }} | {{ $last_post->gaceta_number }}</div>
                <p class="">{{ $last_post->meta_description }}</p>
            </div>
        </div>
        <div class="large-6 columns">
            <h2>Notas destacadas</h2>
            <ul class="notas-home-destacadas">
                @foreach($lastest_posts as $last_post)
                    <li><a href="{{ route('post', [$last_post->section()->first()->slug_url, $last_post->slug_url, $last_post->id]) }}">{{ $last_post->title }}</a></li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="main-content">
        <div class="searchbox large-5 columns">
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
                <div class="large-8 columns author">
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
                            @if(! empty($most_view_post->authored_by))
                                <div>{{$most_view_post->authored_by}} </div>
                            @endif
                                {{ date('M j, Y', strtotime($most_view_post->created_at)) }} |  {{ $most_view_post->gaceta_number }}
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
        <div class="large-11 columns row section-list-sections">

            <h2 class="title-section mora"><span class="box-section mora"></span>{{ $gestion->title }}</h2>

            @foreach($gestion_posts as $post)
                <div class="medium-8 columns">
                    <a   href="{{ route('post', [$post->section()->first()->slug_url, $post->slug_url, $post->id]) }}"> <h3 class="title-post-section mora">{{$post->title}}</h3></a>
                    <div class="fecha-post"> {{ date('M j, Y', strtotime($post->created_at)) }} |  {{ $post->gaceta_number }}</div>
                    @if(! empty($post->image))
                        <figure><img src="uploads/posts/{{ $post->image }}" alt=""/></figure>
                    @else
                        <figure><img src="{{ asset('assets/img/uaem-logo.jpg') }}" alt="{{$last_post->title}}"/></figure>
                    @endif
                    <p class="post-description">{{$post->meta_description}}</p>
                    <div class="footer-post">
                        {{ $gestion->title }}
                    </div>
                </div>
            @endforeach

            <div class="clearfix"></div>

            <h2 class="title-section green"><span class="box-section green-docencia"></span>{{ $docencia->title }}</h2>

            @foreach($docencia_posts as $post)
                <div class="medium-8 columns">
                    <a   href="{{ route('post', [$post->section()->first()->slug_url, $post->slug_url, $post->id]) }}"> <h3 class="title-post-section green-docencia">{{$post->title}}</h3></a>
                    <div class="fecha-post"> {{ date('M j, Y', strtotime($post->created_at)) }} |  {{ $post->gaceta_number }}</div>
                    @if(! empty($post->image))
                        <figure><img src="uploads/posts/{{ $post->image }}" alt=""/></figure>
                    @else
                        <figure ><img src="{{ asset('assets/img/uaem-logo.jpg') }}" alt="{{$last_post->title}}"/></figure>
                    @endif
                    <p class="post-description">{{$post->meta_description}}</p>
                    <div class="footer-post">
                        {{ $docencia->title }}
                    </div>
                </div>

            @endforeach

            <div class="clearfix"></div>

            <h2 class="title-section aqua"><span class="box-section aqua"></span>{{ $investigacion->title }}</h2>

            @foreach($investigacion_posts as $post)
            <div class="medium-8 columns">
               <a   href="{{ route('post', [$post->section()->first()->slug_url, $post->slug_url, $post->id]) }}"> <h3 class="title-post-section aqua">{{$post->title}}</h3></a>
                <div class="fecha-post"> {{ date('M j, Y', strtotime($post->created_at)) }} |  {{ $post->gaceta_number }}</div>
                @if(! empty($post->image))
                <figure><img src="uploads/posts/{{ $post->image }}" alt=""/></figure>
                @else
                    <figure><img src="{{ asset('assets/img/uaem-logo.jpg') }}" alt="{{$last_post->title}}"/></figure>
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
                <div class="medium-8 columns">
                    <a   href="{{ route('post', [$post->section()->first()->slug_url, $post->slug_url, $post->id]) }}"> <h3 class="title-post-section green">{{$post->title}}</h3></a>
                    <div class="fecha-post"> {{ date('M j, Y', strtotime($post->created_at)) }} |  {{ $post->gaceta_number }}</div>
                    @if(! empty($post->image))
                        <figure><img src="uploads/posts/{{ $post->image }}" alt=""/></figure>
                    @else
                        <figure><img src="{{ asset('assets/img/uaem-logo.jpg') }}" alt="{{$last_post->title}}"/></figure>
                    @endif
                        <p class="post-description">{{$post->meta_description}}</p>
                        <div class="footer-post">
                            {{ $extension->title }}
                        </div>
                </div>

            @endforeach

            <div class="clearfix"></div>

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