<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('carteles','App\Http\Controllers\CartelsController');
Route::resource('centrodocumentacion','App\Http\Controllers\CentroDocumentacionController');
Route::resource('encuestas','App\Http\Controllers\EncuestasController');
Route::resource('podcast','App\Http\Controllers\PodcastController');
Route::resource('publicaciones','App\Http\Controllers\PublicacionController');

Route::get('/acercade', function () {
    return view('acercade');
})->name('acercade');

/////////Centro de estudio pagina de prueba piloto///////////
Route::get('/centrodeestudio_prueba', function () {
    return view('centrodeestudio_prueba');
})->name('centrodeestudio_prueba');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

////////////RUTAS DEL PROYECTO POR SECCIÓN///////////////

////////////////////////Podcast/////////////////////////
Route::get('/delete_podcast/{id}', array(
    'as' => 'delete_podcast',
    'middleware' => 'auth',
    'uses' => 'App\Http\Controllers\PodcastController@delete_podcast'
));

Route::get('/modalPodcast/', array(
    'as' => 'modal_podcast',
    // 'middleware' => 'auth',
    'uses' => 'App\Http\Controllers\PodcastController@modalpodcast'
));

// borrado logico route

Route::get('/borrarPodcast/{id}', array(
    'middleware' => 'auth',
    'uses' =>'App\Http\Controllers\PodcastController@borrarPodcast'
))->name('borrarPodcast');

////////////////////////Carteles/////////////////////////

Route::get('/borrarCartel/{id}', array(
    'middleware' => 'auth',
    'uses' =>'App\Http\Controllers\CartelsController@borrarCartel'
))->name('carteles.borrarCartel');


/////////////////////Publicaciones//////////////////////
Route::get('/mostrarpdf/{id}', array(
    'uses'=>'App\Http\Controllers\PublicacionController@mostrarpdf'
))->name('publicaciones.mostrarpdf');

Route::get('/mostrarppt/{id}', array(
    'uses'=>'App\Http\Controllers\PublicacionController@mostrarppt'
))->name('publicaciones.mostrarppt');

// borrado logico route

Route::get('/borrarPublicacion/{id}', array(
    'middleware' => 'auth',
    'uses' =>'App\Http\Controllers\PublicacionController@borrarPublicacion'
))->name('publicaciones.borrarPublicacion');

///// rutas de Pruebas /////

Route::get('/prueba', array(
    // 'middleware' => 'auth',
    'uses' =>'App\Http\Controllers\PodcastController@prueba'
))->name('podcast.prueba');
