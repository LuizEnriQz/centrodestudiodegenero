@extends('layouts.app')
@section('content')

    {{-- //////////////INTRODUCCIÖN///////////// --}}

    <div class="container">
        <div class="jumbotron p-2 rounded bg-white text-center">
            <div class="col-md-12">
                <h1 class="display-4 p-4" style="font-family: 'Filson Pro', sans-serif;" id="Quienes somos">Quiénes somos</h1>
                <p class="lead my-3" style="text-align:justify;">
                <br>El Centro de Estudios de Género (CEG) forma parte del
                    Departamento de Estudios en Educación (DEDUC), mismo que a su vez pertenece a la División de Estudios de
                    Estado y Sociedad (DEES) del Centro Universitario de Ciencias Sociales y Humanidades (CUCSH) de la
                    Universidad de Guadalajara.
                </br>

                <br>
                    Desde 1994, fecha en que fue constituido el CEG, se ha venido trabajando en las tres áreas sustantivas
                    de la Universidad, como son la docencia, la investigación y la difusión-extensión. Los logros han sido
                    importantes, ya que además de brindar un espacio académico al estudio de las problemáticas de género, se
                    vincula la difusión y docencia, para aportar conocimientos científicos en las distintas áreas.
                    Todo ello es relevante para la construcción de una cultura democrática, equitativa y tolerante, sobre
                    las prácticas de hombres y mujeres en la sociedad mexicana.
                </br>
                <br>
                    <span id="text-oculto" style="display:none;"> Proyecto académico del CEG gira en torno al interés por
                        generar discusiones teórico-conceptuales que introduzcan la perspectiva de género en los debates
                        académicos y que se conviertan en un aporte para tranversalizar la perspectiva de género en los
                        distintos ámbitos: gubernamentales, culturales, educativos, sociales, políticos y civiles.
                        Contamos con la Revista de estudios de género. La ventana, que se encuentra en el padrón de
                        excelencia del Consejo Nacional de Ciencia y Tecnología (CONACYT) y que es un referente en este
                        campo de estudios, tanto en el ámbito nacional como internacional.</span>
                </br>
                </p>
                <p class="lead mb-0"><a id="Ver mas" class="text-dark font-weight-bold" onclick="mostrar()">Ver más <i
                            class="fa fa-plus-circle"></i></p></a>
            </div>
            <hr class="featurette-divider m-3">
        </div>
    </div>

    <br>

{{-- ///////////Carteles///////////// --}}
    {{-- <div class="album bg-white">
        <div class="pricing-header mx-auto text-center">
            <h1 class="display-4" style="font-family: 'Filson Pro', sans-serif;">Carteles<h1>
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
    </div> --}}

<br>

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
