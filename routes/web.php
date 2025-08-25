<?php

use Illuminate\Support\Facades\Route;




use App\Http\Controllers\ProductoController;
Route::resource('productos', ProductoController::class);

use App\Http\Controllers\ProfesorController;
Route::resource('profesores', ProfesorController::class);

use App\Http\Controllers\CursoController;
Route::resource('cursos', CursoController::class);

use App\Http\Controllers\MatriculaController;
Route::resource('matriculas', MatriculaController::class);

use App\Http\Controllers\EstudianteController;
Route::resource('estudiantes', EstudianteController::class);

use App\Http\Controllers\RecuperacionController;
Route::resource('recursos', RecuperacionController::class);



Route::get('/', function () {
    return view('welcome');
});
