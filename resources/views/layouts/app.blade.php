<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Centro de estudio género') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script> --}}

    {{-- SCRIPT PAGINATION PODCAST --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>

    <!-- Fonts -->
    <link href="http://fonts.cdnfonts.com/css/filson-pro" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css"> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        {{-- BOOTSTRAP --}}

    <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- SIDEBAR WRAPPER -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/css_sidebar/sidebar.css') }} ">

    <!-- CSS PODCAST-->
    {{-- <link rel="stylesheet" href="{{ asset('css/css_podcast/podcast.css') }} "> --}}


    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

</head>

<body class="py-0" style="display: flex; flex-direction: column; min-height: 100vh;">
    <div id="app">
        @include('layouts.navbar2')
        <div class="wrapper">
            {{-- @include('layouts.navbar') --}}
            @if (Auth::Check() && Auth::user()->role == 'admin')
                @include('layouts.sidebar')
            @endif

            <main class="container">
                @yield('content')
                @yield('modal')
            </main>
        </div>
    </div>

{{-- footer (pie de pagina)--}}

    <footer class="bg-dark mt-1 text-center text-lg-start text-white" id="Contacto" style="margin-top: auto;">
        <!-- Grid container -->
        <div class="container p-1 ">
            <!--Grid row-->
            <div class="row my-4">

            {{-- Footer sección I Logo centro de estudio --}}
                <!--Grid column-->
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">

                    <div class="bg-transparent shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto"
                        style="width: 150px; height: 150px;">
                        <img src="{{ asset('img/CEG.png') }}" class="rounded-circle" width="100%"alt=""
                            loading="lazy" />
                    </div>

                    {{-- <p class="text-center" style="font-family: 'Filson Pro', sans-serif;">Centro de Estudios de Género - Universidad de Guadalajara</p> --}}

                    {{-- Sección de Iconos de redes sociales --}}

                </div>

                <!--Grid column-->

            {{-- footer seccion III Info Dirección --}}
                <!--Grid column-->
                <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase p-0" style="font-family: 'Filson Pro', sans-serif;">Dirección</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p style="font-family: 'Filson Pro', sans-serif;"><i class="fas fa-map-marker-alt pe-2"></i>Centro Universitario de Ciencias Sociales y
                                Humanidades, Campus Los Belenes. Edificio "F4", Primer piso - Av. Parres Arias #150 y
                                Periférico Norte. C.P. 45100. Zapopan, Jalisco, México.</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

            {{-- footer seccion IV mapa --}}
                <!--Grid column-->
                <div class=" col-lg-5 col-md-6 h-100">
                    <h5 class="text-uppercase p-0" style="font-family: 'Filson Pro', sans-serif;">Contacto</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p style="font-family: 'Filson Pro', sans-serif;"><i class="fa fa-clock pe-2"></i> Horario: 9:00 AM - 4:00 PM</p>
                        </li>
                        {{-- <li>
                            <p style="font-family: 'Filson Pro', sans-serif;"><i class="fas fa-phone pe-2" ></i>33 3819 3300 EXT-</p>
                        </li> --}}
                        <li>
                            <p style="font-family: 'Filson Pro', sans-serif;" ><i class="fas fa-envelope pe-2 mb-0"></i>estudios.genero@administrativos.udg.mx</p>
                        </li>
                        <ul class="list-unstyled d-flex flex-row justify-content-center">
                            <li>
                                <a class="text-white px-2" href="https://www.facebook.com/CEG.UdeG">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                            </li>
                            <li>
                                <a class="text-white ps-2"
                                    href="https://www.instagram.com/otraventanaalgenero/">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a class="text-white ps-2"
                                    href="https://open.spotify.com/show/38deWOD94zSGJXhUwYnfTJ?si=770ac524704647bd&nd=1">
                                    <i class="fab fa-spotify"></i>
                                </a>
                            </li>
                            <li>
                                <a class="text-white px-2" href="https://twitter.com/rev_la_ventana">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </ul>

                </div>

                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->
    </footer>

    {{-- <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script> --}}
@yield('scripts')
</body>

</html>
