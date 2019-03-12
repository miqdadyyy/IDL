<?php

use App\Kategori;

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

Route::get('/register', function(){
    return redirect('/');
});

Route::get('/post/{post}', 'PostController@show')->name('post.show');

Route::get('/kompetisi/{kategori}', 'KompetisiController@getPagesByCategory')->name('kompetisi.index');
Route::get('/kompetisi/{kategori}/daftar', 'KompetisiController@getPageDaftar')->name('kompetisi.daftar');
Route::post('/kompetisi/{kategori}/store', 'Admin/KompetisiPenyisihan1@store')->name('kompetisi.store');
Route::get('/kompetisi/{kategori}/peserta', 'KompetisiController@getPagePeserta')->name('kompetisi.peserta');

Route::get('/kompetisi/{kategori}/submit', 'SubmissionController@getPageSubmit')->name('kompetisi.submit.index');
Route::get('/kompetisi/{kategori}/submit/store', 'SubmissionController@submitFile')->name('kompetisi.submit.store');

Route::get('/test', function (){

    return view('admin.pages.test');
});

Route::group(['namespace' => 'Admin', 'as' => 'admin.', 'prefix' => 'admin', 'middleware' =>['auth']], function(){

    Route::get('/', 'AdminController@index')->name('dashboard');

    Route::group(['middleware' => ['ormawa']], function (){
        /* TIM */

        // READ
        Route::get('penyisihan/{kategori}', 'KompetisiPenyisihan1@index')->name('tim.index');
        Route::get('penyisihan/{kategori}/{tim}', 'KompetisiPenyisihan1@show')->name('tim.show');
        // CREATE
        Route::get('penyisihan/{kategori}/create', 'KompetisiPenyisihan1@create')->name('tim.create');
        Route::post('penyisihan/{kategori}/store', 'KompetisiPenyisihan1@store')->name('tim.store');
        // EDIT
        Route::get('penyisihan/{kategori}/{tim}/edit', 'KompetisiPenyisihan1@edit')->name('tim.edit');
        Route::post('penyisihan/{kategori}/update', 'KompetisiPenyisihan1@update')->name('tim.update');
        // DELETE
        Route::post('penyisihan/{kategori}/destroy/{tim}', 'KompetisiPenyisihan1@destroy')->name('tim.destroy');
    });


    /* POST */

//    Route::get('post/ajax/', '\App\Http\Controllers\AjaxController@getPost');
    Route::get('ajax/penyisihan1/{kategori}', 'AjaxController@getPenyisihan1Tim')->name('ajax.penyisihan1');
    Route::get('ajax/download/{path}', 'AjaxController@downloadFile')->name('ajax.download');

    // READ
    Route::get('post/', 'PostController@index')->name('post.index');
    // CREATE
    Route::get('post/create', 'PostController@create')->name('post.create');
    Route::post('post/store', 'PostController@store')->name('post.store');
    // EDIT
    Route::get('post/{post}/edit', 'PostController@edit')->name('post.edit');
    Route::post('post/update/{post}', 'PostController@update')->name('post.update');
    // DELETE
    Route::post('post/destroy/{post}', 'PostController@destroy')->name('post.destroy');

});
