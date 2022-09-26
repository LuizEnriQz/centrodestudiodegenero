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
                <h2>Edita un Cartel</h2>
                <hr>
            </div>

            <form action="{{ route('carteles.update',$cartel->id) }}" method="post" enctype="multipart/form-data"
                class="col-12">
                {{ csrf_field() }}
                {{ method_field('put') }}
                <div class="row">
                    <div class="col">

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
                            <div class="col-md-7">
                                <label class="font-weight-bold" for="nombre"><b>Nombre del Cartel:</b></label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                value="{{ $cartel->nombre}}">
                            </div>
                            <br>
                            <div class="col-md-3">
                                <label class="font-weight-bold" for="categoria">Seleccione: </label>
                                <select class="form-select" type="text" class="select" id="categoria" name="categoria" onchange="selectChange()" >
                                       <option selected value="convocatoria">Convocatoria</option>
                                       <option value="infografia">Infografía</option>
                                </select>
                            </div>
                            <br>
                            <div class="col-md-6">
                                <br>
                                <label class="font-weight-bold" for="file">Seleccione la IMAGEN del Cartel que desea subir </label>
                                <input type="file" name="file"  id="chooseFile" accept="image/*">
                            </div>
                        </div>
                        <br>
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <a href="{{ route('carteles.index') }}" class="btn btn-danger"><i class="fas fa-times-circle"></i></a>
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
