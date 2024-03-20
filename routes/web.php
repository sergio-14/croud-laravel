<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/Estudiante', function () {
    return view('Estudiante.index');
});

Route::get('/Estudiante', [EstudianteController::class,'create']);*/

Route::resource('Estudiante', EstudianteController::class)->middleware('auth');
Auth::routes(['reset'=>false]);

Route::get('/', [EstudianteController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){

    Route::get('/', [EstudianteController::class, 'index'])->name('home');
});