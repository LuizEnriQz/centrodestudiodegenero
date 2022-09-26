<?php

namespace App\Http\Controllers;
use App\Models\Cartel;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CartelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartel = Cartel::where('activo','=',1)->get();
        return view ('Carteles.index')->with('cartel',$cartel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carteles.create');
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
            'file'=>'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $cartel = new Cartel();
        $cartel->nombre = $request->input('nombre');
        $cartel->categoria = $request->input('categoria');
        $cartel->file = $request->file->getClientOriginalName();
        $cartel->activo=1;

        $cartel->save();

        if ($request->file) {
            $nombreArchivo = $request->file->getClientOriginalName();
            $directorioArchivo = $request->file('file')->storeAs('public/carteles_img', $nombreArchivo);
            $Cartels_modelo = new Cartel();
            $Cartels_modelo->file_path = '/storage/app/public/' . $directorioArchivo;
        }

        return redirect('carteles')->with(array(
        'message' => 'El cartel se guardó Correctamente'
    ));    }

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
        $cartel = Cartel::find($id);
        return view('carteles.edit')->with('cartel',$cartel );
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
        $cartel = Cartel::find($id);
        $cartel->nombre = $request->input('nombre');
        $cartel->categoria = $request->input('categoria');

        if(isset($request->file)){

               $cartel->file = $request->file->getClientOriginalName();
               $directorioArchivo = $request->file('file')->storeAs('public/carteles_img', $cartel->file);
               $Cartel_modelo = new Cartels();
               $Cartel_modelo->file_path = '/storage/app/public/' . $directorioArchivo;
           }

        $cartel->update();
        return redirect('carteles');
    }

    public function borrarCartel($id)
    {
        $cartel = Cartel::find($id);
        $cartel->activo=0;
        $cartel->update();

        return redirect('carteles');
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
