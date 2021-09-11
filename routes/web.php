<?php

use App\Http\Controllers\UsuariosController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/holamundo', [App\Http\Controllers\HolaMundoController::class, 'index'])->name('hola.mundo');



/*Route::get('/usuarios', [App\Http\Controllers\UsuariosController::class, 'index'])->name('usuarios');
Route::get('/create', [App\Http\Controllers\UsuariosController::class, 'create'])->name('create');
Route::post('/usuarios/create', [App\Http\Controllers\UsuariosController::class, 'store'])->name('usuarios');*/


Route::resource('/usuarios', UsuariosController::class);
