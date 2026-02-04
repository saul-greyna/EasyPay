<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('components.layout');
});

Route::get('/', function () {
    return view('home.index');
});

Route::post('/', [UserController::class, 'store'])->name('users.store');
