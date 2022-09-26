<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $podcast = Podcast::orderby('id','desc')->where('activo','=',1)->get();
        return view ('Podcast.index',compact('podcast'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Podcast.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $this->validate($request, [
            'nombre' => 'required',
            'episodio' => 'required',
            'descripcion' => 'required',
            'link' => 'required',
        ]);

        $podcast = new Podcast();
        $podcast->nombre = $request->input('nombre');
        $podcast->episodio = $request->input('episodio');
        $podcast->descripcion = $request->input('descripcion');
        $podcast->link = $request->input('link');

        $podcast->save();

        return redirect('podcast')->with(array(
            'message' => 'El podcast se guardó Correctamente'
        ));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function show(Podcast $podcast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $podcast = Podcast::find($id);
        return view('Podcast.edit')->with('podcast', $podcast);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $this->validate($request, [
            'link' => 'required',
        ]);

        $podcast = Podcast::find($id);
        $podcast->link = $request->input('link');
        $podcast->nombre = $request->input('nombre');
        $podcast->episodio = $request->input('episodio');
        $podcast->descripcion = $request->input('descripcion');

        $podcast->update();

        return redirect('podcast')->with(array(
            'message' => 'El podcast se actualizó Correctamente'
        ));
    }

    public function modalpodcast(Request $request)
    {
        $id = $request->input('id');
        $podcast = Podcast::find($id);

        return $podcast;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function destroy(Podcast $podcast)
    {
        //
    }

    public function borrarPodcast($id)
    {
        $podcast = Podcast::find($id);
        $podcast->activo=0;
        $podcast->update();

        return redirect('podcast');
    }
//     public function delete_podcast($id)
//     {
//         $podcast = Podcast::find($id);
//         if ($podcast) {
//             $podcast->activo = 0;
//             $podcast->update();
//
//             return redirect()->route('podcast.index')->with(array(
//                 "message" => "El podcast se ha eliminado correctamente"
//             ));
//         } else {
//             return redirect()->route('welcome')->with(array(
//                 "message" => "El podcast que trata de eliminar no existe"
//             ));
//         }
//     }
}
