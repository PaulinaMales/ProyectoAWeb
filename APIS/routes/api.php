<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Api\PortafolioController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::resource('portafolio', PortafolioController::class);

// Ruta pública para el manejo de inicio de sesión del usuario
//Route::post('/login', [AuthController::class, 'login'])->name('login');

// Grupo de rutas protegidas
Route::middleware(['auth:sanctum'])->group(function ()
{
     // Ruta para el cierre de sesión
     Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    // Ruta para el portafolio
    Route::post('/portafolios',[PortafolioController::class,'store']);
    Route::put('/portafolios/{portafolio}',[PortafolioController::class,'update']);
    Route::delete('/portafolios/{portafolio}',[PortafolioController::class,'destroy']);


});



