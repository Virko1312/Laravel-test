<?php

Route::get('/todos', [\App\Http\Controllers\TodoController::class, 'index']);
Route::get('/todos/create', [\App\Http\Controllers\TodoController::class, 'create']);
Route::post('/todos/create', [\App\Http\Controllers\TodoController::class, 'store']);
Route::get('/todos/edit', [\App\Http\Controllers\TodoController::class, 'edit']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [\App\Http\Controllers\UserController::class, 'index']);
Route::post('/upload', [\App\Http\Controllers\UserController::class, 'uploadAvatar']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
