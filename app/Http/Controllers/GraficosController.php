<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Encuesta;


class GraficosController extends Controller
{
    public function index(){
        if (!Auth::check()){
            return  redirect('/');
        }
        $encuestas = Encuesta::all();
        return view('graficos');
    }
}
