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

Route::get('student', 'StudentController@index')->name('index');
Route::get('student/create', 'StudentController@create')->name('create');
Route::post('student/store', 'StudentController@store')->name('store');
Route::get('student/{id}/edit', 'StudentController@edit')->name('edit');
Route::put('student/{id}', 'StudentController@update')->name('update');
Route::delete('/{id}', 'StudentController@destroy')->name('destroy');



