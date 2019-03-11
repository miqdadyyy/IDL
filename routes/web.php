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
    return view('pages.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/isic', 'HomeController@getIsicPage')->name('isic');
Route::get('/itec', 'HomeController@getItecPage')->name('itec');
Route::get('/laos-arena', 'HomeController@getLaosarenaPage')->name('laosarena');
Route::get('/pkm-go', 'HomeController@getPkmgoPage')->name('pkmgo');
Route::get('/submit', 'HomeController@getSubmitPage')->name('submit');
