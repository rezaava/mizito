<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', [TestController::class, 'index'])->name('index');
    Route::get('/projects', [TestController::class, 'projects'])->name('projects');
    Route::get('/tasks', [TestController::class, 'tasks'])->name('tasks');
    Route::get('/messages', [TestController::class, 'messages'])->name('messages');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/login-post', [AuthController::class, 'loginPost'])->name('loginPost');
Route::post('/register-post', [AuthController::class, 'registerPost'])->name('registerPost');
