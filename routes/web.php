<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/canciones/{id?}',function($id=null){
    $canciones = [];
    $canciones[] = ['nombre' => 'Animals', 'artista'=>'Maroon5'];
    $canciones[] = ['nombre' => 'Girls Like You', 'artista'=>'Maroon5'];
    $canciones[] = ['nombre' => 'Dont Wanna Know', 'artista'=>'Maroon5'];
    //dd($canciones);

    if(is_null($id)){
        $cancion=$canciones[$id];
    } else{
        $cancion=null;
    }


    //return view('canciones')
      //  ->with(['canciones'=>$canciones]);
    return view('canciones', compact('canciones','cancion'));
});

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
