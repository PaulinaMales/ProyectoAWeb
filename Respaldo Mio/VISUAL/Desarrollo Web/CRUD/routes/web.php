<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ContactController;





Route::get('/',[ProductoController::class,'index'])->name('home');
Route::resource('producto',ProductoController::class);
// Route::resource('product',ProductoController::class);

Route::view("/contact", "contactForm")->name("contactForm");

Route::post("/send", [ContactController::class, 'send'])->name('send.email');

