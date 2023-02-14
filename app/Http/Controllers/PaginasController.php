<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function consulta_canciones($id=null)
    {
        $canciones = [];
        $canciones[] = ['nombre' => 'Animals', 'artista'=>'Maroon5'];
        $canciones[] = ['nombre' => 'Girls Like You', 'artista'=>'Maroon5'];
        $canciones[] = ['nombre' => 'Dont Wanna Know', 'artista'=>'Maroon5'];
        //dd($canciones);
    
        if(!is_null($id)){
            $cancion=$canciones[$id];
        } else{
            $cancion=null;
        }
    
    
        //return view('canciones')
          //  ->with(['canciones'=>$canciones]);
        return view('canciones', compact('canciones','cancion'));
    }

    public function contacto(){
        return view('contacto');
    }

    //public function Postcontacto(){
        //dd('Ejecuto PostContacto');
    //}

    public function Postcontacto(Request $request){
        //dd($request);//Todo
        //dd($request->all());//Detallado
        //dd($request->input('nombre'));//Solo nombre
        //dd($request->nombre);//Alternativa
        //dd($request->nombre,$request->codigo);

        //Validar información

        $request->validate([
            'nombre'=> 'required|string|max:255',
            'codigo'=> ['required','integer', 'max:100'],
        ]);
        dd('Sí pasó la validación');
    }

}
