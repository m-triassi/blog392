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

Route::get('/', 'PageController@index')->name('home');
Route::get('/article/{slug}', 'PageController@article')->name('article');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/home', 'PageController@dashboard')->name('dashboard');
Route::post('/submit/article', 'ArticleController@submit')->name('submit');


Auth::routes(['register' => false]);
