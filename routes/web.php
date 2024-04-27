<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard', ['type_menu' => 'dashboard']);
})->middleware('auth');
Route::post('/auth', [AuthController::class, 'login'])->name('auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/pagination', function () {
    return view('pagination', ['type_menu' => 'dashboard']);
})->middleware('auth');
