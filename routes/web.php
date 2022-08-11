<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HuespedController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\HabitacionController;



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

Route::get('buscar', [HuespedController::class, 'buscar'])->name('buscar');
//
Route::get('buscar1', [ReservaController::class, 'buscar1'])->name('buscar1');
//
Route::get('buscar2', [ReservaController::class, 'buscar2'])->name('buscar2');
//
Route::get('consulta', [ReservaController::class, 'consulta'])->name('consulta');
//
Route::get('consulta1', [HabitacionController::class, 'consulta1'])->name('consulta1');
//
Route::get('consulta2', [HabitacionController::class, 'consulta2'])->name('consulta2');
//
Route::get('consulta3', [ReservaController::class, 'consulta3'])->name('consulta3');
//
Route::get('consulta4', [ReservaController::class, 'consulta4'])->name('consulta4');



