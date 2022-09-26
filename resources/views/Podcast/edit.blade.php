@extends('layouts.app')
@section('content')

    <div class="container">
        @if (Auth::check())
            @if (session('message'))
                <div class="alert alert-success">
                    <h2>{{ session('message') }}</h2>

                </div>
            @endif

            <div class="row">
                <h2>Edita un Podcast</h2>
                <hr>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#js-example-basic-single').select2();
                        $('#js-example-basic-single2').select2();
                        $('#equipos').select2();
                    });
                </script>

            </div>
            <form action="{{ route('podcast.update', $podcast->id) }}" method="post" enctype="multipart/form-data"
                class="col-12">
                @method('PUT')
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

                        <div class="row g-3 align-items-center">
                            <div class="row g-3 align-items-center">
                                <div class="col-md-9">
                                    <label class="font-weight-bold" for="link">Link del Podcast</label>
                                    <input type="text" class="form-control" id="link" name="link"
                                        value="{{ $podcast->link }}">
                                </div>
                                <br>
                                <div class="col-md-8">
                                    <label class="font-weight-bold" for="nombre"><b>Nombre del Episodio o Podcast:</b></label>
                                    <input type="text" class="form-control" id="nombre" name="nombre"
                                        value="{{ $podcast->nombre }}">
                                </div>
                                <br>
                                <div class="col-md-2">
                                    <label class="font-weight-bold" for="episodio"><b>Numero de episodio:</b></label>
                                    <input type="text" class="form-control" id="episodio" name="episodio"
                                        value="{{ $podcast->episodio}}">
                                </div>
                                <br>
                                <div class="col-md-10">
                                    <label class="font-weight-bold" for="descripcion"><b>Descripción:</b></label>
                                    <input type="text" class="form-control" id="descripcion" name="descripcion"
                                        value='{{ $podcast->descripcion}}'>
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="row g-3 align-items-center">
                            <div class="col-md-12">
                                <a href="{{ route('podcast.index') }}" class="btn btn-danger">Cancelar</a>
                                <button type="submit" class="btn btn-success">Guardar datos</button>
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
