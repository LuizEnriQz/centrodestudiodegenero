<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <!-- Fonts -->
    <link href="http://fonts.cdnfonts.com/css/filson-pro" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        {{-- BOOTSTRAP --}}

    <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- SIDEBAR WRAPPER -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/css_sidebar/sidebar.css') }} ">

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

</head>

<body class="py-0">
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

    <footer class="bg-dark mt-1 text-center text-lg-start text-white" id="Contacto">
        <!-- Grid container -->
        <div class="container p-1 ">
            <!--Grid row-->
            <div class="row my-4">

            {{-- Footer sección I Logo centro de estudio --}}
                <!--Grid column-->
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">

                    <div class="bg-transparent shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto"
                        style="width: 150px; height: 150px;">
                        <img src="{{ asset('img/CEG.png') }}" width="100%"alt=""
                            loading="lazy" />
                    </div>

                    {{-- <p class="text-center" style="font-family: 'Filson Pro', sans-serif;">Centro de Estudios de Género - Universidad de Guadalajara</p> --}}

                    {{-- Sección de Iconos de redes sociales --}}

                    <ul class="list-unstyled d-flex flex-row justify-content-center">
                        <li>
                            <a class="text-white px-2" href="https://www.facebook.com/CEG.UdeG">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                        </li>
                        <li>
                            <a class="text-white px-2" href="https://twitter.com/rev_la_ventana">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a class="text-white ps-2"
                                href="https://open.spotify.com/show/38deWOD94zSGJXhUwYnfTJ?si=770ac524704647bd&nd=1">
                                <i class="fab fa-spotify"></i>
                            </a>
                        </li>
                    </ul>

                </div>

                <!--Grid column-->

            {{-- footer seccion III Info Dirección --}}
                <!--Grid column-->
                <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4" style="font-family: 'Filson Pro', sans-serif;">Dirección</h5>

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
                        <li>
                            <p style="font-family: 'Filson Pro', sans-serif;"><i class="fas fa-phone pe-2" ></i>33 3819 3300 EXT-</p>
                        </li>
                        <li>
                            <p style="font-family: 'Filson Pro', sans-serif;" ><i class="fas fa-envelope pe-2 mb-0"></i>estudios.genero@administrativos.udg.mx</p>
                        </li>
                    </ul>
                    {{-- <div class="col-sm-12 col-md-12">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14925.878635251594!2d-103.38539232049988!3d20.731749728558736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428af097b88abe3%3A0xbb90e158805bcd46!2sCUCSH%20Belenes%20(Centro%20Universitario%20De%20Ciencias%20Sociales%20y%20Humanidades%20Campus%20Belenes)!5e0!3m2!1ses-419!2smx!4v1656698246059!5m2!1ses-419!2smx"
                            class="w-100" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div> --}}
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
