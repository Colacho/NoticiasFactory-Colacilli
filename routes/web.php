<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

//Route::get('/noticias', [NoticiaController::class, 'index'])->name('noticias.index');
//Route::get('/noticias/{noticia}', [NoticiaController::class, 'show'])->name('noticias.show');

Route::resource('users', UserController::class);
Route::resource('noticias', NoticiaController::class);
Route::resource('categorias', CategoriaController::class);
Route::get('/noticiasConImagenes', [NoticiaController::class, 'conImagenes'])->name('noticias.conImagenes');