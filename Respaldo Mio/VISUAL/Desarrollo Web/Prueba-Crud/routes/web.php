<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

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
//Route::get ('categorias/create',[App\Http\Controllers\CategoriaController::class,'create'])->name('categorias.create');



//Ruta 1 Metodo 
/* vista-> ,se comunica con el controlador, metodo index (creado en el controlador)*/
Route::get ('/categorias',[CategoriaController::class,'index'])->name('categorias.index');

//Ruta 2
Route::get ('categorias/create',[CategoriaController::class,'create'])->name('categorias.create');

//Ruta 3 (store//guardar)
Route::post ('categorias',[CategoriaController::class,'store'])->name('categorias.store');

//Ruta 4
Route::get ('categorias/{id}',[CategoriaController::class,'show'])->name('categorias.show');

//Ruta 5
Route::get ('categorias/{id}/edit',[CategoriaController::class,'edit'])->name('categorias.edit');

//Ruta 6
Route::put ('categorias/{id}',[CategoriaController::class,'update'])->name('categorias.update');

//Ruta 7
Route::delete('categorias/{id}',[CategoriaController::class,'destroy'])->name('categorias.destroy');

