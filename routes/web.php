<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginasController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/canciones/{id?}',[PaginasController::class, 'consulta_canciones']);

Route::get('/contacto',[PaginasController::class, 'contacto']);

Route::post('/contacto',[PaginasController::class, 'Postcontacto']);
//Route::get('/canciones/{id}',function($id){
    //$canciones = [];
    //$canciones[] = ['nombre' => 'Animals', 'artista'=>'Maroon5'];
    //$canciones[] = ['nombre' => 'Girls Like You', 'artista'=>'Maroon5'];
    //$canciones[] = ['nombre' => 'Dont Wanna Know', 'artista'=>'Maroon5'];
    //dd($canciones);
  //  $cancion = $canciones[$id];


    //return view('canciones')
      //  ->with(['canciones'=>$canciones]);
    //return view('detalleCancion', compact('cancion'));
//});
