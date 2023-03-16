<?php

use Illuminate\Support\Facades\Route;

#FUNCIONALIDADES
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Presidente\PresidentController;
use App\Http\Controllers\Jugador\JugadorController;

#Nueva vista para que evitar que se autentique automaticamente
use App\Http\Controllers\Auth\CustomRegisterController;

//CONTROLADORES
use App\Http\Controllers\Admin\scheduleController;
use App\Http\Controllers\Admin\crudEquipo;
use App\Http\Controllers\Admin\crudPresident;
use App\Http\Controllers\Presidente\crudPlayer;
use App\Http\Controllers\Admin\crudPartido;

//CONTROLADORES VISTAS PRINCIPALES
use App\Http\Controllers\Admin\partidosViewController;
use App\Http\Controllers\Auth\LoginController;

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




Auth::routes();

#Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* RUTAS DE LA PÁGINA PRINCIPAL*/
Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::post('/', [LoginController::class, 'login'])->name('login');

Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

Route::get('/partidos', [partidosViewController::class, 'index'])->name('partidos');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');




#Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');


/* RUTA ADMINISTRADOR*/

 Route::group(['prefix' => 'admin', 'middleware' => 'soloadmin'], function () {
    Route::get('/index', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.index');
     Route::post('/index', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.index');

     //CREACION PRESIDENTE 
     Route::get('/crudPresident', [App\Http\Controllers\Admin\crudPresident::class, 'index'])->name('admin.crudPresident');
     Route::get('/crudPresident/create', [App\Http\Controllers\Admin\crudPresident::class, 'create'])->name('admin.crudPresident.create'); 
     Route::post('/crudPresident/create', [crudPresident::class, 'store'])->name('president.create');
     Route::patch('/crudPresident/{id}', [crudPresident::class, 'update'])->name('president.update');
     Route::delete('/crudPresident/{id}', [crudPresident::class, 'destroy'])->name('president.delete');

    //PUBLICACION PARTIDO
     Route::get('/schedule', [App\Http\Controllers\Admin\scheduleController::class, 'index'])->name('admin.schedule');     
     Route::post('/schedule', [App\Http\Controllers\Admin\scheduleController::class, 'store'])->name('admin.schedule');

    //CREACION EQUIPO
     Route::get('/crudEquipo', [App\Http\Controllers\Admin\crudEquipo::class, 'index'])->name('admin.crudEquipo');
     Route::get('/crudEquipo/create', [App\Http\Controllers\Admin\crudEquipo::class, 'create'])->name('admin.crudEquipo.create');
     Route::post('/crudEquipo/create', [crudEquipo::class, 'store'])->name('equipo.create'); 
     Route::patch('/crudEquipo/{id}', [crudEquipo::class, 'update'])->name('equipo.update');
     Route::delete('/crudEquipo/{id}', [crudEquipo::class, 'destroy'])->name('equipo.delete');

     //CREACION PARTIDO
     Route::get('/crudPartido', [App\Http\Controllers\Admin\crudPartido::class, 'index'])->name('admin.crudPartido.index');
     Route::get('/crudPartido/create', [App\Http\Controllers\Admin\crudPartido::class, 'create'])->name('admin.crudPartido.create');
     Route::post('/crudPartido/create', [crudPartido::class, 'store'])->name('partido.create'); 
     Route::patch('/crudPartido/{id}', [crudPartido::class, 'update'])->name('partido.update'); 
     Route::delete('/crudPartido/{id}', [crudPartido::class, 'destroy'])->name('partido.delete'); 

     Route::get('/gestion', function () {
        return view('admin.gestion');
    })->name('admin.gestion');
 });



/* RUTA PRESIDENTE */
Route::group(['prefix' => 'presidente', 'middleware' => 'solopresident'], function () {
    Route::get('/index', [App\Http\Controllers\Presidente\crudPlayer::class, 'dashboard'])->name('presidente.president');
    Route::post('/index', [App\Http\Controllers\Presidente\crudPlayer::class, 'dashboard'])->name('presidente.president');
     
    //CREACION JUGADOR    
    Route::get('/crudPlayer', [App\Http\Controllers\Presidente\crudPlayer::class, 'index'])->name('presidente.crudPlayer');
    Route::get('/crudPlayer/create', [App\Http\Controllers\Presidente\crudPlayer::class, 'create'])->name('presidente.crudPlayer.create');
    Route::post('/crudPlayer/create', [crudPlayer::class, 'store'])->name('player.create');
    Route::patch('/crudPlayer/{id}', [crudPlayer::class, 'update'])->name('player.update');
    Route::delete('/crudPlayer/{id}', [crudPlayer::class, 'destroy'])->name('player.delete');
 });

/* RUTA JUGADOR */

 Route::group(['prefix' => 'jugador', 'middleware' => 'soloplayer'], function () {
    Route::get('/', [App\Http\Controllers\Jugador\JugadorController::class, 'index'])->name('jugador.player');
    Route::post('/', [App\Http\Controllers\Jugador\JugadorController::class, 'index'])->name('jugador.player');

 });


/* RUTAS PARA EVITAR LA AUTENTICACION AUTOMATICA */
Route::get('/register', [CustomRegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [CustomRegisterController::class, 'register']);

/*RECUPERACIÓN DE LA CONTRASEÑA*/
Route::get('password/reset', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

Route::post('password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');