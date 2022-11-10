@extends('layouts.app')
@section('content')
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="{{ asset('LandingPage/css/blog.css') }}" rel="stylesheet">

    <br>

    {{-- //////////CARUSSEL////////// --}}

    <div class="row">
        <div class="container-fluid">
            <div class="row justify-content-center ">
                <div class="col-sm-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/home/logo_ceg.png') }}" class="img-fluid d-block" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/home/cuestion_de_genero.jpeg') }}" class="img-fluid d-block" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/home/nuestras_voces.jpeg') }}" class="img-fluid d-block"
                                    alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <br>

{{-- ///////////Carteles///////////// --}}
    <div class="album bg-white">
        <div class="pricing-header mx-auto text-center">
            <h1 class="display-4" style="font-family: 'Filson Pro', sans-serif;">Carteles<h1>
                    {{-- <p class="lead" style="font-family: 'Filson Pro', sans-serif;">Nos sumergimos a las profundidades
                        de la sociedad ... </p> --}}
        </div>

        @if(isset($cartel))
        <div class="row mb-3">
            @foreach($cartel as $cart)
            <div class="col-md-4">
                <div class="card mb-4 box-shadow h-100">
                    <img class="card-img-top" src="{{ "/CentroDeEstudioDeGenero/storage/app/public/carteles_img/" . $cart->file }}" alt="Thumbnail [100%x225]" style="height: 425px; width: 100%; display: block;">
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>

<br>

{{-- ///////////REVISTA LA VENTANA////////// --}}

    <div class="col-md-12 mb-3">
    <div class="pricing-header mx-auto text-center">
        <h1 class="display-4" style="font-family: 'Filson Pro', sans-serif;">La Revista<h1>
                {{-- <p class="lead" style="font-family: 'Filson Pro', sans-serif;">Nos sumergimos a las profundidades
                    de la sociedad ... </p> --}}
    </div>
        <div class="card bg-dark text-white">
            <img src="{{ asset('img/pageHeaderLogoImage_es_ES.png') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
                <h5 class="card-title revista-la-ventana" style="font-family: 'Filson Pro', sans-serif; text-align:center"
                    id="Revista La Ventana">Revista
                    La Ventana</h5>
            </div>
                <p class="card-text revista-la-ventana"style=" text-align:justify; font-family: 'Filson Pro', sans-serif;">
                <a href="http://revistalaventana.cucsh.udg.mx/index.php/LV" target="_blank" class="text-white pe-2"
                style="font-family: 'Filson Pro', sans-serif;">Ir a La ventana / Revista</a><i class="fa fa-arrow-right"></i>
                </p>
        </div>
    </div>
    <br>
    <!--///////// Podcast ///////////-->
    <div class="pricing-header mx-auto text-center">
        <h1 class="display-4" style="font-family: 'Filson Pro', sans-serif;">Nuestro Podcast<h1>
    </h1>
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <div class="card">
                <div class="row">
                    <div class="col-sm-1 col-md-2">
                        <img src="{{ asset('img/simple-normal.png') }}" class="img-fluid rounded-start"
                            style="height: 100%; width: 100%; display: block;" alt="Podcast - Otra ventana al género">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body md-12">
                            <h5 class="card-title" style="font-family: 'Filson Pro', sans-serif;">Podcast - Otra
                                ventana al género</h5>
                            <p class="card-text" style="font-family: 'Filson Pro', sans-serif text-align:justify ">
                                Esto es Otra ventana al género. Podcast de promoción y divulgación de debates e
                                investigaciones académicas sobre género con episodios de comentarios entrevistas,
                                reseñas y agenda de actividades. Con la producción académica de Marisa Martínez del
                                cuerpo académico Género, cultura y relaciones sociales CA-UDG-490 y el apoyo del equipo
                                del Centro de Estudios de Género y la Revista de Estudios de Género La Ventana de la
                                Universidad de Guadalajara.
                            </p>
                            <p class="card-text">
                                <a href="{{ route('podcast.index') }}" class="text-dark"><small class="text-muted pe-2"
                                        style="font-family: 'Filson Pro', sans-serif;">Ver todos los podcast</small><i
                                        class="fa fa-arrow-right pe-4"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="card h-100">
                <div class="card-body md-12">
                    <iframe style="border-radius:10px"
                        src="https://open.spotify.com/embed/show/38deWOD94zSGJXhUwYnfTJ?utm_source=generator"
                        class="h-100" frameBorder="0" allowfullscreen
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture">
                    </iframe>
                </div>
                <p class="card-text border border-5">
                    <a href="https://open.spotify.com/show/38deWOD94zSGJXhUwYnfTJsi=770ac524704647bd&nd=1"
                    class="text-dark" style="font-family: 'Filson Pro', sans-serif;"> Ir a Spotify <i
                        class="fab fa-spotify"></i>
                    </a>
                </p>
            </div>
        </div>

    </div>
    <br>

    <!-- ////// Centro de Documentación/////// -->
    {{-- <div class="container-fluid">
        <div class="card">
            <h3 class="text-dark" style="font-family: 'Filson Pro', sans-serif; text-align:center;">Centro de
                Documentación - Simone de Beauvoir</h3>
            <img src="{{ asset('img/biblioteca.jpeg') }}" class="card-img-top" alt="..." height="420">

            <div class="card-body">
                <h5 class="card-title" style="font-family: 'Filson Pro', sans-serif;">Bienvenido a la biblioteca
                    Simone de Beauvoir</h5>
                <p class="card-text" style="font-family: 'Filson Pro', sans-serif;">Aquí encontrarás contenido
                    acerca de ...</p>
                <a href="#" class="btn btn-primary" style="font-family: 'Filson Pro', sans-serif;">Acceder
                    a la biblioteca</a>
            </div>
        </div>
    </div> --}}

    {{-- End div main container --}}


    <script>
        function mostrar() {
            let show = document.getElementById('text-oculto');
            if (show.style.display == "block") {
                show.style.display = "none";
            } else {
                show.style.display = "block";
            }
            //console.log(show.style.display);
        }
    </script>
@endsection
