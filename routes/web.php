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

Route::get('/', 'IndexController@index');
Route::get('/show', 'IndexController@show');
Route::get('/logout', 'IndexController@getLogout');

Route::resource('usstocklists', 'UsstocklistsController');
Route::get('/usstocklists', 'UsstocklistsController@index')->middleware('auth');
Route::post('/usstocklists', 'UsstocklistsController@store');
Route::get('/usstocklists/create', 'UsstocklistsController@create');
Route::get('/usstocklists/{ticker}', 'UsstocklistsController@show');
Route::post('/usstocklists/{ticker}', 'UsstocklistsController@update');
Route::delete('/usstocklists/{ticker}', 'UsstocklistsController@destroy');
Route::get('/usstocklists/{ticker}/edit', 'UsstocklistsController@edit');

Route::resource('usstockdividends', 'UsstockdividendsController');
Route::get('/usstockdividends', 'UsstockdividendsController@index');
Route::post('/usstockdividends', 'UsstockdividendsController@store');
Route::get('/usstockdividends/create', 'UsstockdividendsController@create');
Route::get('/usstockdividends/{ticker}', 'UsstockdividendsController@show');
Route::post('/usstockdividends/{ticker}', 'UsstockdividendsController@update');
Route::delete('/usstocklists/{ticker}', 'UsstocklistsController@destroy');
Route::get('/usstocklists/{ticker}/edit', 'UsstocklistsController@edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
