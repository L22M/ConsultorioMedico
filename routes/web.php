<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\Rol_usuarioController;
use App\Http\Controllers\PacienteController;


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

Route::get('/', function () {
    return view('inicio');
});


Route::resource('usuarios',UsuariosController::class);
Route::resource('rol_usuario',Rol_usuarioController::class);
Route::resource('paciente',PacienteController::class);


