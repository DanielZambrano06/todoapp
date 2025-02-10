<?php

use App\Http\Controllers\TaskController;

Route::middleware('auth')->group(function () {
    Route::resource('tasks', TaskController::class);
    Route::put('/tasks/{task}/complete', [TaskController::class, 'complete'])->name('tasks.complete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
