<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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
Route::get ('/productos',[ProductoController::class,'index'])->name('productos.index');

//Ruta 2
Route::get ('productos/create',[ProductoController::class,'create'])->name('productos.create');

//Ruta 3 (store//guardar)
Route::post ('productos',[ProductoController::class,'store'])->name('productos.store');

//Ruta 4
Route::get ('productos/{id}',[ProductoController::class,'show'])->name('productos.show');

//Ruta 5
Route::get ('productos/{id}/edit',[ProductoController::class,'edit'])->name('productos.edit');

//Ruta 6
Route::put ('productos/{id}',[ProductoController::class,'update'])->name('productos.update');

//Ruta 7
Route::delete('productos/{id}',[ProductoController::class,'destroy'])->name('productos.destroy');
