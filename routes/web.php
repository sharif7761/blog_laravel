<?php

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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', function () {
    return view('post');
})->name('post');


Route::get('/admin', function () {
    return view('admin.home');
})->name('admin');

Route::get('/admin/post', function () {
    return view('admin.post.post');
})->name('admin.post');

Route::get('/admin/category', function () {
    return view('admin.category.category');
})->name('admin.category');

Route::get('/admin/tag', function () {
    return view('admin.tag.tag');
})->name('admin.tag');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
