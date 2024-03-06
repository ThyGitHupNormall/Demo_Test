<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontController;

Route::get('/',[FrontController::class, 'Home']);
Route::get('/index',[FrontController::class, 'Home']);
Route::get('/explore',[FrontController::class, 'Explore']);
Route::get('/details',[FrontController::class, 'Details']);
Route::get('/author',[FrontController::class, 'Author']);
Route::get('/create',[FrontController::class, 'Create']);
