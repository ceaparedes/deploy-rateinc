<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EncuestaController extends Controller
{
    public function index(){
        return view('encuesta');
    }

    public function post_evauacion(Request $request){

        $validated = $request->validate([
            'nota' => 'required|numeric|min:1|max:10',
            'comentario' => 'required'
        ]);

       
    }
}
