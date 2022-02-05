<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

// Route
// Controller
// View

Route::get('/', function () {
    return view('welcome');
});

Route::get('/article', [ArticleController::class, 'index']);
Route::get('/article/create', [ArticleController::class, 'create']);
Route::get('/article/{article:slug}', [ArticleController::class, 'single']);
Route::get('/article/{article:slug}/edit', [ArticleController::class, 'edit']);
Route::post('/article', [ArticleController::class, 'store']);
Route::put('/article/{article:slug}', [ArticleController::class, 'update']);
Route::delete('/article/{id}', [ArticleController::class, 'destroy']);


// kita bisa menggunakan method resourece untuk membuat fungsi, jadi kita tak perlu menambahkan get, post, delete, put
// $php artisan make:controller PhotoController --resource
