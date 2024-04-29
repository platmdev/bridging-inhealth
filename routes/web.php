<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
Route::get('/dashboard', function () {
    return view('dashboard', ['type_menu' => 'dashboard']);
});
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/pagination', function () {
    return view('pagination', ['type_menu' => 'dashboard']);
});
});
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/auth', [AuthController::class, 'login'])->name('auth');
