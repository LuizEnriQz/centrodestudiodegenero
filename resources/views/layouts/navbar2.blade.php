<style>
    .nav-link {
        color: white;
    }
</style>
<!-- navbar navbar-expand-lg" style="background:#195270 -->
<nav class="navbar navbar-light navbar-expand-md sticky-top shadow-lg" style="background:#e1251b">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('/img/CEG.png') }}" alt="logoCEG" class="rounded-circle"
                style="min-height: 50px; padding-top: 0px; height: 100PX;">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">

                <li class="nav-item" style="font-family: 'Filson Pro', sans-serif;">
                    <a href="{{ route('home') }}" class="nav-link text-white">
                        Inicio
                    </a>
                </li>
                <li class="nav-item" style="font-family: 'Filson Pro', sans-serif;">
                    <a href="http://revistalaventana.cucsh.udg.mx/index.php/LV" target="_blank"
                        class="nav-link text-white">
                        Revista la ventana
                    </a>
                </li>
                <li class="nav-item" style="font-family: 'Filson Pro', sans-serif;">
                    <a href="{{ route('podcast.index') }}" class="nav-link text-white">
                        <i class="fab fa-spotify pe-1"></i>Otra Ventana (Podcast)</a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('centrodocumentacion.index') }}" class="nav-link text-white"
                        style="font-family: 'Filson Pro', sans-serif;">
                        Centro de Documentación
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="{{ route('carteles.index') }}" class="nav-link text-white"
                        style="font-family: 'Filson Pro', sans-serif;">
                        Carteles
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('publicaciones.index') }}" class="nav-link text-white" style="font-family: 'Filson Pro', sans-serif;">
                        Publicaciones
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#Contacto" class="nav-link text-white" style="font-family: 'Filson Pro', sans-serif;">
                        Contacto
                    </a>
                </li>

                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item bg-dark text-white" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
