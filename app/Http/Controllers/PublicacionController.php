<?php

namespace App\Http\Controllers;
use App\Models\Publicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Dompdf\Dompdf;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicaciones = Publicacion::where('activo','=',1)->get();
        return view ('Publicaciones.index')->with('publicaciones',$publicaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publicaciones.create');
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
            'file'=>'required|mimes:pdf',
        ]);
        $publicaciones = new Publicacion();
        $publicaciones->nombre = $request->input('nombre');
        $publicaciones->file = $request->file->getClientOriginalName();
        $publicaciones->activo=1;

        $publicaciones->save();

        if ($request->file) {
            $nombreArchivo = $request->file->getClientOriginalName();
            $directorioArchivo = $request->file('file')->storeAs('public/publicaciones_pdf', $nombreArchivo);
            $Publicacion_modelo = new Publicacion();
            $Publicacion_modelo->file_path = '/storage/app/public/' . $directorioArchivo;
        }

        return redirect('publicaciones')->with(array(
        'message' => 'La publicació se guardó Correctamente'
    ));    }

// Mostrar documentos / archivos ///
    public function mostrarpdf($id)
    {
        $publicacionEncontrada = Publicacion::find($id);

        $path = storage_path('app/public/publicaciones_pdf/' . $publicacionEncontrada->file);
        $header = [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="' . $publicacionEncontrada->file . '"'
        ];
        return response()->file($path, $header);
    }

    public function mostrarppt($id)
    {
        $publicacionEncontrada = Publicacion::find($id);

        $path = storage_path('app/public/publicaciones_ppt/' . $publicacionEncontrada->file);
        $header = [
        'Content-Type' => 'application/vnd.ms-powerpoint',
        'Content-Disposition' => 'inline; filename="' . $publicacionEncontrada->file . '"'
        ];
        return response()->file($path, $header);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publicaciones = Publicacion::find($id);
        return view('publicaciones.edit')->with('publicaciones',$publicaciones );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $publicaciones = Publicacion::find($id);
        $publicaciones->nombre = $request->input('nombre');

        if(isset($request->file)){

               $publicaciones->file = $request->file->getClientOriginalName();
               $directorioArchivo = $request->file('file')->storeAs('public/publicaciones_pdf', $publicaciones->file);
               $Publicacion_modelo = new Publicacion();
               $Publicacion_modelo->file_path = '/storage/app/public/' . $directorioArchivo;
           }

        $publicaciones->update();
        return redirect('publicaciones');
    }

        public function borrarPublicacion($id){

        $publicaciones = Publicacion::find($id);
        $publicaciones->activo = 0;
        $publicaciones->update();

        return redirect('publicaciones');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
