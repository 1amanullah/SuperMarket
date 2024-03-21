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
Route::middleware('admin.auth')->prefix('admin')->group(function () {
   
    Route::get('/','App\Http\Controllers\Admin\AdminController@login')->name('admin');
    Route::post('/login','App\Http\Controllers\Admin\AdminController@checklogin')->name('admin.login');
    Route::get('/logout','App\Http\Controllers\Admin\AdminController@logout')->name('logout');

});
