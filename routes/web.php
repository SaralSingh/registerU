<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::view('/','welcome');

Route::get('/', [UserController::class, 'showUsers'])->name('users');
Route::get('/user/{id}',[UserController::class,'ShowUser'])->name('user');
Route::get('/register',[UserController::class,'create'])->name('user.create');

Route::post('/register',[UserController::class,'store'])->name('user.store');

Route::fallback(function()
{
    return view('notFound');
});





