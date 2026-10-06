<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('about', [MainController::class, 'about'])->name('about');
<<<<<<< HEAD
Route::get('/aboutRuta', [MainController::class, 'aboutMetodo']);
=======
Route::get('aboutRuta', [MainController::class, 'aboutMetodo'])->name('aboutNombre');
Route::get('portfolio', [MainController::class, 'portfolio'])->name('portfolio');

>>>>>>> refs/remotes/origin/main
