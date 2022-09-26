@extends('layouts.app')
@section('content')

    <div class="container">
        @if (Auth::check())
            @if (session('message'))
                <div class="alert alert-success">
                    <h2>{{ session('message') }}</h2>

                </div>
            @endif

            <div class="row p-4">
                <h2>Capturar el Podcast</h2>
                <hr>
                {!! csrf_field() !!}

                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#js-example-basic-single').select2();
                        $('#js-example-basic-single2').select2();
                        $('#equipos').select2();
                    });
                </script>

            </div>
            <b>Recuerda agregar el /embed en el link, para que se pueda visualizar el podcast</b>
            <p>Ejemplo: https://open.spotify.com/episode/0xHXacNPy2elqxJTbFCo66 <b style="color: blue;">-></b> https://open.spotify.com<b style="color:red">/embed</b>/episode/0xHXacNPy2elqxJTbFCo66</p>
            <form action="{{ route('podcast.store') }}" method="post" enctype="multipart/form-data"
                class="col-12">
                <div class="row">
                    <div class="col">
                        {!! csrf_field() !!}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="row align-items-center">
                            <div class="col-md-10">
                                <label class="font-weight-bold" for="link"><b>Link del Podcast:</b></label>
                                <input type="text" class="form-control" id="link" name="link">
                            </div>
                            <br>
                            <div class="col-md-8">
                                <label class="font-weight-bold" for="nombre"><b>Nombre del Episodio o Podcast:</b></label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                            </div>
                            <br>
                            <div class="col-md-2">
                                <label class="font-weight-bold" for="episodio"><b>Numero de episodio:</b></label>
                                <input type="text" class="form-control" id="episodio" name="episodio">
                            </div>
                            <br>
                            <div class="col-md-10">
                                <label class="font-weight-bold" for="descripcion"><b>Descripción:</b></label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion">
                            </div>
                        </div>
                        <br>
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <a href="{{ route('home') }}" class="btn btn-danger"><i class="fas fa-times-circle"></i></a>
                                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i></button>
                            </div>
                        </div>
                    </div>
                    <br>

                </div>
            </form>
            <br>
            <div class="row g-5 align-items-center">

                <br>
                <h5>En caso de inconsistencias, favor de reportarlas.</h5>
                <hr>

            </div>

    </div>
@else
    Acceso No válido
    @endif
@endsection
