<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordController;
Route::get('/', function () {
    return view('add');
});
Route::get('/add', function () {
    return view('add'); // フォームを表示するためのGETルート
});
/* addにアクセスした時に「WordController」内のaddを参照する*/
Route::post('/add', [WordController::class, 'add']);

Route::get('/show', [WordController::class, 'show']);
Route::delete('/delete/{id}', [WordController::class, 'delete'])->name('word.delete');

