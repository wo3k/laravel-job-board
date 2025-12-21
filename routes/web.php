<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\jobController;
use App\Http\Controllers\postController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [indexController::class, 'index']);
Route::get('/about', [indexController::class, 'about']);
Route::get('/contact', [indexController::class, 'contact']);
Route::get('/job', [jobController::class, 'index']);

Route::get('/blog', [postController::class, 'index']);
Route::get('/blog/create', [postController::class, 'create']);
Route::get('/blog/delete', [postController::class, 'delete']);
Route::get('/blog/{id}', [postController::class, 'show']);

Route::get('/comments', [CommentController::class, 'index']);
Route::get('/comments/create', [CommentController::class, 'create']);

Route::get('/tags', [TagController::class, 'index']);
Route::get('/tags/create', [TagController::class, 'create']);
Route::get('/tags/test-many', [TagController::class, 'testManyTomany']);
