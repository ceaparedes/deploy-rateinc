<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encuesta;

class EncuestaController extends Controller
{
    public function index(){
        //comentario de prueba deploy.
        return view('encuesta');
    }

    public function post_evauacion(Request $request){
        try {
            $validated = $request->validate([
            'nota' => 'required|numeric|min:1|max:10',
            ]);

            Encuesta::create([
                'nota' => $request->nota,
                'comentario' => $request->comentario,
            ]);
            return redirect('/')->with('success', 'Encuesta Guardada con éxito, gracias por participar');
        } catch (\Throwable $th) {
            return back()->withErrors('Ha ocurrido un error, encuesta no almacenada.');
        }
        
       
    }
}
