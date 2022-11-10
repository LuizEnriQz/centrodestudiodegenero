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
                <h2>Edita una Publicación</h2>
                <hr>
            </div>

            <form action="{{ route('publicaciones.update',$publicaciones->id) }}" method="post" enctype="multipart/form-data"
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
                                <label class="font-weight-bold" for="titulo"><b>Titulo de la Publicación:</b></label>
                                <input type="text" class="form-control" id="titulo" name="titulo"
                                value="{{ $publicaciones->titulo}}">
                            </div>
                            <br>
                            <div class="col-md-5">
                                <label class="font-weight-bold" for="autor"><b>Autor de la Publicación:</b></label>
                                <input type="text" class="form-control" id="autor" name="autor"
                                value="{{ $publicaciones->autor}}">
                            </div>
                            <br>
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="descripcion"><b>Descripción:</b></label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion"
                                value="{{ $publicaciones->descripcion}}">
                            </div>
                            <br>
                            <div class="col-md-9">
                                <br>
                                <label class="font-weight-bold" for="foto">Seleccione la foto del autor de la publicación</label>
                                <input type="file" name="foto"  id="chooseFile" accept="image/*">
                            </div>
                            <br>
                            <div class="col-md-9">
                                <br>
                                <label class="font-weight-bold" for="portada">Seleccione el archivo de la portada de la publicación </label>
                                <input type="file" name="portada"  id="chooseFile" accept="application/pdf">
                            </div>
                            <br>
                            <div class="col-md-9">
                                <br>
                                <label class="font-weight-bold" for="file">Seleccione el archivo de la publicación que desea subir </label>
                                <input type="file" name="file"  id="chooseFile" accept="application/pdf">
                            </div>
                        </div>
                        <br>
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <a href="{{ route('publicaciones.index') }}" class="btn btn-danger"><i class="fas fa-times-circle"></i></a>
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
