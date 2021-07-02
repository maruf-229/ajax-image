<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PostController::class,'index']);
Route::post('save_post',[PostController::class,'save_post']);
Route::get('get_posts',[PostController::class,'get_posts']);
Route::get('edit/{id}',[PostController::class,'edit']);
Route::post('edit/update_post/{id}',[PostController::class,'update']);

Route::get('del_post/{id}',[PostController::class,'delete_post']);
