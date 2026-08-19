<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\WorkspaceController;
use App\Models\Workspace;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', [TestController::class, 'index'])->name('index');
    Route::get('/projects', [TestController::class, 'projects'])->name('projects');
    Route::get('/tasks', [TestController::class, 'tasks'])->name('tasks');
    Route::get('/messages', [TestController::class, 'messages'])->name('messages');
    Route::prefix('/workspace')->group(function(){
        Route::get('/create',[WorkspaceController::class,'create'])->name('workspace.create');
    });
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/login-post', [AuthController::class, 'loginPost'])->name('loginPost');
Route::post('/register-post', [AuthController::class, 'registerPost'])->name('registerPost');
