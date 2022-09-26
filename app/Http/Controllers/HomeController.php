<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Cartel;
use App\Models\CentroDocumentacion;
use App\Models\Publicacion;


class HomeController extends Controller
{
    public function index()
    {
       $cartel = Cartel::where('activo','=',1)
       ->take(3)
       ->get();

        return view('home')
        ->with('cartel',$cartel);
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

}
