<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\BooksController;
use App\HTTP\Controllers\DetailsController;
use App\HTTP\Controllers\CategoriesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home',[BooksController::class,'index']);
Route::get('/contact', [CategoriesController::class,'viewkontak']);

Route::get('/{category}',[BooksController::class,'searchCategory']);
Route::get('/detail/{book}',[DetailsController::class,'index']);
