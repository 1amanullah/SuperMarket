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


Route::get('/','App\Http\Controllers\Admin\HomeController@index')->name('index');   
Route::get('/admin','App\Http\Controllers\Admin\AdminController@login')->name('admin');
Route::post('/admin/login','App\Http\Controllers\Admin\AdminController@checklogin')->name('admin.login');
Route::get('/admin/logout','App\Http\Controllers\Admin\AdminController@logout')->name('logout');
Route::get('/admin/category','App\Http\Controllers\Admin\CategoriesController@index')->name('category');
Route::get('/admin/category_add','App\Http\Controllers\Admin\CategoriesController@create')->name('add_category');

