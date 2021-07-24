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
    return view('/auth/login');
});

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* ROUTE EDIT DELETE CRUD */
Route::get('admin/home/tambah', 'HomeController@tambah');
Route::post('admin/home/store', 'HomeController@store');
Route::get('admin/home/edit/{id}', 'HomeController@edit');
Route::put('admin/home/update/{id}', 'HomeController@update');
Route::get('admin/home/hapus/{id}', 'HomeController@delete');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
