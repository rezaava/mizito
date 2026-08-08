<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', [TestController::class, 'index'])->name('index');
Route::get('/projects', [TestController::class, 'projects'])->name('projects');
Route::get('/tasks', [TestController::class, 'tasks'])->name('tasks');
Route::get('/messages', [TestController::class, 'messages'])->name('messages');

