@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="text-center text-warning p-4">Publicaciones</h1>

    <img src="{{asset('img/Nuestras Voces.png')}}" alt="Nuestras-voces"  class="mb-4 sm-12" width="100%">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum voluptatibus, consequatur culpa iure temporibus corrupti esse est ad unde asperiores ea expedita atque nobis? Voluptates ratione excepturi voluptatibus optio praesentium!</p>

        <div class="accordion accordion-flush" id="accordionFlushExample">

        {{-- Publicaciones / Encuestas --}}
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Publicaciones / Encuestas
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">

                {{-- @foreach($publicaciones as $pub) --}}
                    <div class="accordion-body">
                        <div class="d-flex justify-content-between"
                            <tr>
                                <div class="d-flex justify-content-start">
                                <th>nombre</th>
                                </div>
                                <div class="d-flex justify-content-end">
                                @if (Auth::Check() && Auth::user()->role == 'admin')
                                <th><a href="" role="button" class="btn btn-light" title="Eliminar Publicación"><i class="fa fa-trash" style="color:slategray" ></i></a>
                                </th>
                                <th><a href="" role="button" class="btn btn-light" title="Editar Publicación"><i class="fas fa-edit" style="color:cadetblue" ></i></a>
                                </th>
                                @endif
                                <th><a href="" role="button" class="btn btn-light" title="Mostrar Publicación" target="_blank"><i class="fas fa-file-pdf" style="color:palevioletred" ></i></a>
                                </th>
                                </div>
                            </tr>
                        </div>
                    </div>
                {{-- @endforeach --}}

                </div>
            </div>

            {{-- Tabulación o sección extra --}}
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Tabulación
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.
                    </div>
                </div>
            </div>

            {{-- Micro datos o tercera sección --}}
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Microdatos
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
