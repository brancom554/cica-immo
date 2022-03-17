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

Route::get('/pay/{id}','App\Http\Controllers\HomeController@pay');
Route::post('/submitLoginAjax','App\Http\Controllers\HomeController@checkLogin');
Route::get('/login','App\Http\Controllers\HomeController@login');
Route::get('/', 'App\Http\Controllers\HomeController@show');
Route::get('/admin/index', 'App\Http\Controllers\AdminController@index');
Route::get('/annonces', 'App\Http\Controllers\HomeController@annonces');
Route::get('/viewDetails/{id}', 'App\Http\Controllers\HomeController@viewDetails');
Route::get('/admin/manageAnnonces', 'App\Http\Controllers\AdminController@manage');
Route::get('/admin/addAnnonce', 'App\Http\Controllers\AdminController@addAnnonce');
Route::get('/admin/viewAnnonce/{id}', 'App\Http\Controllers\AdminController@viewAnnonce');
Route::post('/admin/addAnnonce', 'App\Http\Controllers\AdminController@storeAnnonce');
// Route::post('/', 'App\Http\Controllers\HomeController@storePhoneNumber');
// Route::post('/custom', 'App\Http\Controllers\HomeController@sendCustomMessage');
// Route::get('/delete/{user}','App\Http\Controllers\HomeController@delete');
