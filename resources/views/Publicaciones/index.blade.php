@extends('layouts.app')
    {{-- <link rel="stylesheet" href="{{ asset('css/css_publicacion/paginacion.css') }} "> --}}
@section('content')
<div class="container">
    <div class="pricing-header px-3 py-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 p-4">Publicaciones</h1>
    </div>

    @if(isset($publicaciones))

    <div class="row">
            @foreach($publicaciones as $pub)
        <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card bg-dark text-white">
                <img class="img-fluid" src="{{'/CentroDeEstudioDeGenero/storage/app/public/publicaciones_portada/'.$pub->portada}}" style="opacity: 0.5; filter: blur(4px);">
                {{-- style="width: 21rem; height: 26.5rem; opacity: 0.5; filter: blur(4px); --}}
            <div class="card-img-overlay">
                <div class="card-body" style="height: 85%">
                    <h5 class="card-title">{{$pub->titulo}}</h5>
                    <p class="card-text" style="text-shadow: 1px 1px #222021; color: #F0ECEE;">{{$pub->descripcion}}</p>
                </div>
                <div class="card-footer ">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{'/CentroDeEstudioDeGenero/storage/app/public/publicaciones_fotos/'.$pub->foto}}" alt="autor" class="rounded-circle" style="min-height: 1px; padding-top: 0px; height: 60px;">
                        </div>
                        <div class="col-9">
                            <div class="p-2">{{$pub->autor}}</div>
                        </div>
                    </div>
                    <div class="row">
                        <a class="btn btn-primary" onclick="modal({{$pub}})">Ver mas</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>

<!-- Modal -->
<div class="modal fade" id="modalPublicacion" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
{{-- Empieza el contenido del Modal --}}
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="staticBackdropLabel">Titulo</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-8 ms-auto">
                <h5>Nombre:</h5>
                    <p id=titulo style="font-family: 'Filson Pro', sans-serif;"></p>
                <h5>Descripción:</h5>
                    <p id="descripcion" style="font-family: 'Filson Pro', sans-serif;"></p>
            </div>
            <div class="col-md-4 ms-auto">
                <img class="img-fluid" id="myImgSrc">
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-md-12 ms-auto">
                <h5 class="title">Comentarios</h5>
                <textarea id="text" style="width: 100%" placeholder="Escribe tu comentario aquí..."></textarea>
                <div class="status">
                    <span id="char"></span>
                    <span id="words"></span>
                    <span id="lines"></span>
                    <span id="symbols"></span>
                </div>
            </div>
        </div> --}}
      </div>
      <div class="modal-footer">
        <a href="#" id="file" class="btn btn-primary">Descargar Archivo</a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<script>

function modal(element) {
    document.querySelector('#titulo').innerText = element.titulo
    document.querySelector('#descripcion').innerText = element.descripcion;
    let a = '{{asset("storage")}}'
    document.querySelector('#myImgSrc').setAttribute('src', '/CentroDeEstudioDeGenero/storage/app/public/publicaciones_portada/'+element.portada)

    document.querySelector('#file').addEventListener('click', function(){
        // const btn = document.querySelector('#file')

        this.href = '/CentroDeEstudioDeGenero/storage/app/public/publicaciones_pdf/'
        this.download = element.file;

    })

    $('#modalPublicacion').modal('show')
}

function descargar(element) {
    // let b = '{{asset("storage")}}'
}




</script>


@endsection
