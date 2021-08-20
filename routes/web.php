<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
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


Route::get('/', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user.home');;
Route::get('/post', [App\Http\Controllers\User\PostController::class, 'index'])->name('user.post');;

Route::resource('admin/post', PostController::class);
Route::resource('admin/category', CategoryController::class);
Route::resource('admin/tag', TagController::class);

Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin');



Auth::routes();


