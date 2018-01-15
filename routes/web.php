<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'ProfileController@index');
Route::get('/overview', 'StatisticsController@overview');
Route::get('/statistics', 'StatisticsController@statistics');
Route::get('/add', 'AddEditController@add');
Route::get('/edit', 'AddEditController@edit');
Route::post('/profile/edit', 'ProfileController@store');
Route::post('/profile/delete', 'ProfileController@delete');