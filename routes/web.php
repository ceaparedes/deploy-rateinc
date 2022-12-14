<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GraficosController;
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
Route::get('/encuesta', [EncuestaController::class, 'index'])->name('encuesta');
Route::post('/encuesta/post-evalucacion', [EncuestaController::class, 'post_evauacion'])->name('post-evaluacion');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/post-login', [LoginController::class, 'post_login'])->name('post-login');

Route::get('/graficos', [GraficosController::class, 'index'])->name('graficos');