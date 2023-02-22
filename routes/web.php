<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CategoryController;

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

//Movies
Route::get('/', [MovieController::class,'index']);
Route::get('/add-movie', [MovieController::class,'addMovie']);
Route::post('/storeMovie', [MovieController::class,'store']);
Route::get('/movie/{movie}',[MovieController::class,'showMovie']);
Route::get('/movie/edit/{movie}',[MovieController::class,'editMovie']);
Route::post('/update/{movie}', [MovieController::class,'storeUpdate']);
Route::get('/movie/delete/{movie}',[MovieController::class,'deleteMovie']);
Route::get('/search', [MovieController::class,'search']);
Route::post('/searchMovie',[MovieController::class,'searchResults']);
//Categories
Route::get('/add-category', [CategoryController::class,'create']);
Route::post('/storeCategory', [CategoryController::class,'store']);
Route::get('/all-categories', [CategoryController::class,'index']);
Route::get('/category/delete/{category}', [CategoryController::class,'destroy']);
Route::get('/category/edit/{category}', [CategoryController::class,'edit']);
Route::post('/category/update/{category}', [CategoryController::class,'update']);
Route::get('/category/{category}', [CategoryController::class,'showCategory']);
