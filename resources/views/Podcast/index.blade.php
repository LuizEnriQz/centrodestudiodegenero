@extends('layouts.app')

{{-- @section('scripts')
    <script src="{{asset('/js/podcast/modal.js')}}"></script>
@endsection --}}

@section('content')
    <div class="container">
        <br>
        <a href="https://open.spotify.com/show/38deWOD94zSGJXhUwYnfTJ?si=770ac524704647bd&nd=1" target="_blank"><img
                src="{{ asset('img/Banner-Podcast.png') }} " alt="Otra ventana-Podcast" class="mb-4 sm-12" width="100%"></a>

{{-- BOTONES DE HOME Y CREATE  --}}
        <div class="row align-items-center">
            <div class="col-md-2">
                <a class="btn" style="background:#a1a1a1" href="{{ route('home') }}"><i class="fa fa-home"></i></a>
                @if (Auth::Check() && Auth::user()->role == 'admin')
                <a href="{{ route('podcast.create') }}" type="submit" class="btn btn-success"><i class="fa fa-plus"></i></a>
                @endif
            </div>
        </div>
        <hr>

        @if (isset($podcast))
            <div class="row">
                @foreach ($podcast as $pod)
                    <div class="col-sm-6 col-md-4">
                        <div class="card">
                            <iframe style="border-radius:12px" src="{{ $pod->link }}?utm_source=generator"
                                width="100%" height="232" frameBorder="0" allowfullscreen=""
                                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture">
                            </iframe>
                            <button type="button" class="btn btn-alert" style="font-family: 'Filson Pro Regular', sans-serif;" onclick="modal({{$pod}})">Información</button>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>



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
          @if (Auth::Check() && Auth::user()->role == 'admin')
            <a href="" id="borrarPodcast" class="btn btn-secondary"><i class='fa fa-trash'></i> Borrar</a>
            <a href="" id="editarPodcast" class="btn btn-success"><i class='fa fa-edit'></i> Editar</a>
          @endif
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fas fa-times-circle"></i> Cerrar</button>
          </div>
        </div>
      </div>
    </div>

@endsection

<script>
function modal(element) {

document.querySelector('#nombre').innerText = element.nombre
document.querySelector('#episodio').innerText = element.episodio
document.querySelector('#descripcion').innerText = element.descripcion

$('#modalPodcast').modal('show')
//
var url = "{{ route('borrarPodcast', ':id') }}";
url = url.replace(':id', element.id);
document.getElementById('borrarPodcast').href = url;
console.log(url);

var url = "{{ route('podcast.edit', ':id') }}";
url = url.replace(':id', element.id);
document.getElementById('editarPodcast').href = url;
console.log(url);


}
</script>
