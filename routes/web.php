<?php

use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

});
Route::get('/upload', [FileController::class, 'index']);
Route::post('/upload', [FileController::class, 'store'])->name('file.store');
