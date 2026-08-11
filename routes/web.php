<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AuthController;

Route::get('/', [TestController::class, 'index'])->name('index');
Route::get('/projects', [TestController::class, 'projects'])->name('projects');
Route::get('/tasks', [TestController::class, 'tasks'])->name('tasks');
Route::get('/messages', [TestController::class, 'messages'])->name('messages');

Route::get('/login',[AuthController::class,"login"])->name("login");