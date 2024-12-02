<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', [MovieController::class, 'list'])->name('movie.index');
Route::get('/add', [MovieController::class, 'addForm'])->name('movie.addForm');
Route::post('/add', [MovieController::class, 'addNew'])->name('movie.add');
Route::delete('/delete/{movie}', [MovieController::class, 'delete'])->name('movie.delete');
