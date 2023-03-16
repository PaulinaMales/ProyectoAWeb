<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginControler;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MenuController;


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

Route::get('/', [pageController::class, 'welcome'])->name('welcome');

Route::get('/register', [pageController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class,'registerUser']);

Route::get('/login', [pageController::class, 'login'])->name('login');
Route::post('/login', [LoginControler::class,'login']);

Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

//routs for the CRUD
Route::resource('menu',MenuController::class);
Route::get('/menu',[MenuController::class, 'index'])->name('menu');