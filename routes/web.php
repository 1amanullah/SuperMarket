<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/admin','App\Http\Controllers\Admin\AdminController@login')->name('login');
Route::post('/admin/login','App\Http\Controllers\Admin\AdminController@checklogin')->name('admin.login');
Route::get('/admin/logout','App\Http\Controllers\Admin\AdminController@logout')->name('logout');
// categories
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/dashboard','App\Http\Controllers\Admin\HomeController@index')->name('index');   
    Route::get('/admin/category','App\Http\Controllers\Admin\CategoriesController@index')->name('category');
    Route::get('/admin/category/create','App\Http\Controllers\Admin\CategoriesController@create')->name('category_add');
    Route::post('/admin/category','App\Http\Controllers\Admin\CategoriesController@store');
});

