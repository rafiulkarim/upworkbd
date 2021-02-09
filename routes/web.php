<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;



//signup
Route::get('/signup', [SignupController::class, 'signup'])->name('singup.index');

//signin
Route::get('/', [SigninController::class, 'signin'])->name('singin.index');
