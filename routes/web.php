<?php

Route::get('/todos', [\App\Http\Controllers\TodoController::class, 'index'])->name('todo.index');
Route::get('/todos/create', [\App\Http\Controllers\TodoController::class, 'create']);
Route::post('/todos/create', [\App\Http\Controllers\TodoController::class, 'store']);
Route::get('/todos/{todo}/edit', [\App\Http\Controllers\TodoController::class, 'edit']);
Route::patch('/todos/{todo}/update', [\App\Http\Controllers\TodoController::class, 'update'])->name('todo.update');
Route::put('/todos/{todo}/complete', [\App\Http\Controllers\TodoController::class, 'complete'])->name('todo.complete');
Route::delete('/todos/{todo}/incomplete', [\App\Http\Controllers\TodoController::class, 'incomplete'])->name('todo.incomplete');
Route::delete('/todos/{todo}/delete', [\App\Http\Controllers\TodoController::class, 'delete'])->name('todo.delete');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [\App\Http\Controllers\UserController::class, 'index']);
Route::post('/upload', [\App\Http\Controllers\UserController::class, 'uploadAvatar']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
