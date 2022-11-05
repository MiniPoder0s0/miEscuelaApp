<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\EspecialidadController;


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


Route::get('/', [HomeController::class, 'home']);

//Alumnos
Route::get('/alumnos', [AlumnoController::class, 'consultar']);
Route::get('/alumno/registrar', [AlumnoController::class, 'registrar']);
Route::post('/alumno/guardar', [AlumnoController::class, 'guardar']);
Route::get('/alumno/eliminar/{id}', [AlumnoController::class, 'eliminar']);
Route::get('/alumno/editar/{id}', [AlumnoController::class, 'editar']);
Route::post('/alumno/actualizar/{id}', [AlumnoController::class, 'actualizar']);

//Grupo
Route::get('/grupos', [GrupoController::class, 'consultar']);
Route::get('/grupo/registrar', [GrupoController::class, 'registrar']);
Route::post('/grupo/guardar', [GrupoController::class, 'guardar']);
Route::get('/grupo/eliminar/{id}', [GrupoController::class, 'eliminar']);
Route::get('/grupo/editar/{id}', [GrupoController::class, 'editar']);
Route::post('/grupo/actualizar/{id}', [GrupoController::class, 'actualizar']);

//Especialidad
Route::get('/especialidad', [EspecialidadController::class, 'consultar']);
Route::get('/especialidad/registrar', [EspecialidadController::class, 'registrar']);
Route::post('/especialidad/guardar', [EspecialidadController::class, 'guardar']);
Route::get('/especialidad/eliminar/{id}', [EspecialidadController::class, 'eliminar']);
Route::get('/especialidad/editar/{id}', [EspecialidadController::class, 'editar']);
Route::post('/especialidad/actualizar/{id}', [EspecialidadController::class, 'actualizar']);



