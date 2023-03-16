<?php

use Illuminate\Support\Facades\Route;

#FUNCIONALIDADES
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Presidente\PresidentController;
use App\Htto\Controllers\Jugador\JugadorController;

#Nueva vista para que evitar que se autentique automaticamente
use App\Http\Controllers\Auth\CustomRegisterController;

//CONTROLADORES
use App\Http\Controllers\Admin\formPresidentController;
use App\Http\Controllers\Admin\scheduleController;

use App\Http\Controllers\Presidente\formPlayerController;

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

    Route::get('/formPresident', [App\Http\Controllers\Admin\crudPresident::class, 'index'])->name('admin.crudPresident');
    Route::get('/formPresident/create', [App\Http\Controllers\Admin\crudPresident::class, 'create'])->name('admin.crudPresident.create');
    #Route::get('/control', [App\Http\Controllers\Admin\crudPresident::class, 'index'])->name('admin.crudPresident');

    Route::get('/schedule', [App\Http\Controllers\Admin\scheduleController::class, 'index'])->name('admin.schedule');
    Route::post('/schedule', [App\Http\Controllers\Admin\scheduleController::class, 'store'])->name('admin.schedule');

});

/* RUTA PRESIDENTE */

Route::group(['prefix' => 'presidente', 'middleware' => 'solopresident'], function () {
    Route::get('/index', [App\Http\Controllers\Presidente\PresidentController::class, 'index'])->name('presidente.president');
    Route::post('/index', [App\Http\Controllers\Presidente\PresidentController::class, 'index'])->name('presidente.president');

    Route::get('/control', [App\Http\Controllers\Presidente\formPlayerController::class, 'index'])->name('presidente.formPlayer');
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







