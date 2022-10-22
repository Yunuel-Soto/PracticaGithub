<?php

use App\Http\Controllers\controladorVistas;
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

// Route::get('/', function () {
//     return view('Formulario');
// });

Route::get('Formulario', [controladorVistas::class, 'showFormulario'])->name('form');
Route::get('Tabla', [controladorVistas::class, 'showTabla'])->name('Tab');

Route::post('Entrar', [controladorVistas::class, 'entrando'])->name('in');
