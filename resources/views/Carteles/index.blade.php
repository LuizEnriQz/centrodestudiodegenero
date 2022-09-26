@extends('layouts.app')

@section('content')
<div class="container">
    <div class="album bg-white">

        <div class="pricing-header px-3 py-3 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Carteles<h1>
              <p class="lead">Carteles presentados por Centro de Estudio de Género</p>
        </div>

        @if(isset($cartel))
        <div class="row mb-3">
            @foreach($cartel as $cart)
            <div class="col-md-4">
              <div type="button" data-bs-toggle="modal" data-bs-target="#modalCartel-{{$cart->id}}" class="card mb-4 box-shadow">
                    <img class="card-img-top" src="{{ "/CentroDeEstudioDeGenero/storage/app/public/carteles_img/" . $cart->file }}" alt="Thumbnail [100%x225]" style="height: 425px; width: 100%; display: block;">
               <div class="card-body">
                     <p class="card-text">Tipo: {{$cart->categoria}}.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        {{-- <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalCartel-{{$cart->id}}">View</button> --}}
                @if (Auth::Check() && Auth::user()->role == 'admin')
                        <a href="{{ route('carteles.edit', $cart->id) }}" type="button" class="btn btn-sm btn-outline-secondary">Edit</a>
                        <a href="{{ route('carteles.borrarCartel', $cart->id) }}" type="button" class="btn btn-sm btn-outline-secondary" >Borrar</a>
                @endif
                    </div>
                    <small class="text-muted">Centro de Estudio de Género</small>
                </div>
               </div>
              </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
@endsection

@section('modal')
{{-- Modal --}}
@foreach ($cartel as $cart)
    <div class="modal fade" id={{'modalCartel-'.$cart->id}}>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="img-border-rounded">
                    <img style="object-fit:contain; width:100%;" src="{{'/CentroDeEstudioDeGenero/storage/app/public/carteles_img/'.$cart->file}}"/>
                </div>
            </div>
                {{-- <div class="modal-header">
                    <h1>{{$cart->titulo}}</h1><br>
                </div> --}}
                {{-- @if($cart->categoria)
                    <div class="modal-info--item bg-dark text-light">
                        <b>Tipo:</b> {{$cart->categoria}}
                    </div>
                @endif --}}
            {{-- <div class="modal-body">

                <div class="modal-footer">
                    <input class="btn btn-dark" data-dismiss="modal" value="Cerrar">
                </div>
            </div> --}}
        </div>

    </div>
@endforeach

@endsection

