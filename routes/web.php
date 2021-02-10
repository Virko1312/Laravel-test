<?php

//Route::middleware('auth')->group(function (){
    Route::resource('/todo', \App\Http\Controllers\TodoController::class);
    Route::put('/todos/{todo}/complete', [\App\Http\Controllers\TodoController::class, 'complete'])->name('todo.complete');
    Route::delete('/todos/{todo}/incomplete', [\App\Http\Controllers\TodoController::class, 'incomplete'])->name('todo.incomplete');
//});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [\App\Http\Controllers\UserController::class, 'index']);
Route::post('/upload', [\App\Http\Controllers\UserController::class, 'uploadAvatar']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
