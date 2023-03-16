<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

//Para mostrar las listas cuando se logee
use App\Http\Controllers\PostController;




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


/*------ Para la autenticacion vamos a utilizar el componente breezer -----*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




Route::controller(PageController::class)->group ( function (){
    Route::get('/','home')->name('home');
    Route::get('blog','blog')->name('blog');
    Route::get('blog/{post:slug}','post')->name('post');

    
 }) ;

 //Creamos las rutas nuevas 
 /*Recourse: sirve para crear las rutas completas (7//create, update, detroy,index,)
 -- CREAR RUTAS EXCEPTO ALGUNA  
 Route::resource('posts',PostController::class)->except('show');*/
 //ver listado de rutas --> php artisan route:list

 Route::resource('posts',PostController::class);


require __DIR__.'/auth.php';
