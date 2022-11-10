@extends('layouts.app')
    <link rel="stylesheet" href="{{ asset('css/css_podcast/podcast.css') }} ">
    {{-- <link rel="stylesheet" href="{{ asset('css/css_podcast/pagination.css') }} "> --}}
@section('content')

<section class="light">
    <div class="container">
        @if (isset($podcast))
            <div class="h1 text-center text-dark p-4">Podcast</div>
        @foreach ($podcast as $pod)
            <article class="postcard light green">
                <div class="col-md-8">
                    <iframe style="border-radius:12px;" src="{{ $pod->link }}?utm_source=generator"
                        width="100%" height="232" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture">
                    </iframe>
                </div>
                <div class="postcard__text t-dark col-md-4">
                    <div class="row">
                        <h1 class="postcard__title green text-dark"><a>Episodio-{{$pod->episodio}}</a></h1>
                        <div class="postcard__preview-txt text-dark">{{$pod->nombre}}</div>
                    </div>
                    <br>
                        <button class="btn btn-success" style="font-family: 'Filson Pro Regular', sans-serif;" onclick="modal({{$pod}})">Información</button>
                    @if (Auth::Check() && Auth::user()->role == 'admin')
                        <a href="{{ route('borrarPodcast', $pod->id) }}" class="btn btn-secondary" for="Borrar"><i class='fa fa-trash'></i></a>
                        <a href="{{ route('podcast.edit', $pod->id) }}" class="btn btn-primary" for="Editar"><i class='fa fa-edit'></i></a>
                    @endif
                </div>
            </article>
        @endforeach
        <div class="d-flex justify-content-center">
        {{$podcast->links()}}
        </div>
        @endif
        <br>
    </div>

    {{-- <div class="paginacion">
        <li class="page-item pag-prev"><a href="#">Prev</a></li>
        <li class="page-item pag-actual"><a href="#">1</a></li>
        <li class="page-item puntos"><a href="#">...</a></li>
        <li class="page-item pag-actual"><a href="#">5</a></li>
        <li class="page-item pag-actual"><a href="#">6</a></li>
        <li class="page-item puntos"><a href="#">...</a></li>
        <li class="page-item pag-actual"><a href="#">10</a></li>
        <li class="page-item pag-prox"><a href="#">Prox</a></li>
    </div> --}}

</section>

<!-- Modal -->
<div class="modal fade" id="modalPodcast" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-danger bg-gradient text-white">
        <h5 class="modal-title" id="exampleModalLabel">Podcast Otra Ventana al Género</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <h2>Nombre del Podcast</h2>
        <p id="nombre" style="font-family: 'Filson Pro', sans-serif;"></p>
      <h2>Episodio #</h2>
        <p id="episodio" style="font-family: 'Filson Pro', sans-serif;"></p>
       <h2>Descripción</h2>
        <p id="descripcion" style="font-family: 'Filson Pro', sans-serif;"></p>
      </div>
      <div class="modal-footer">
      <span id="prueba"></span>
      {{-- @if (Auth::Check() && Auth::user()->role == 'admin')
        <a href="" id="borrarPodcast" class="btn btn-secondary"><i class='fa fa-trash'></i> Borrar</a>
        <a href="" id="editarPodcast" class="btn btn-success"><i class='fa fa-edit'></i> Editar</a>
      @endif --}}
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fas fa-times-circle"></i> Cerrar</button>
      </div>
    </div>
  </div>
</div>


                        {{-- ///////////////////SCRIPTS////////////////////////// --}}

    {{-- SCRIPT MODAL --}}
<script>
function modal(element) {

document.querySelector('#nombre').innerText = element.nombre
document.querySelector('#episodio').innerText = element.episodio
document.querySelector('#descripcion').innerText = element.descripcion

$('#modalPodcast').modal('show')
//

///// Botones de eliminar y editar dentro del modal por medio del script///////

// var url = "{{ route('borrarPodcast', ':id') }}";
// url = url.replace(':id', element.id);
// document.getElementById('borrarPodcast').href = url;
// console.log(url);
//
// var url = "{{ route('podcast.edit', ':id') }}";
// url = url.replace(':id', element.id);
// document.getElementById('editarPodcast').href = url;
// console.log(url);


}
</script>
@endsection
