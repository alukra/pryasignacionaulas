<?php

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

use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\TipoAulaController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\FacultadController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\GrupoController;


Route::get('/', [LandingController::class, 'index']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/authenticate', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/calendario/materia/{id}', [CalendarioController::class, 'getMateria']);
Route::get('/calendario/aula/{id}', [CalendarioController::class, 'getAula']);
Route::get('/calendario/docente/{id}', [CalendarioController::class, 'getDocente'] );

Route::resource('usuario', UsuarioController::class);
Route::resource('tipoaula', TipoAulaController::class);
Route::resource('aula', AulaController::class);
Route::resource('docente', DocenteController::class);
Route::resource('facultad', FacultadController::class);
Route::resource('carrera', CarreraController::class);
Route::resource('materia', MateriaController::class);
Route::resource('grupo', GrupoController::class);