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

Route::get('/post/{post}', 'Admin\PostController@show')->name('post.show');

Route::get('/kompetisi/{kategori}', 'KompetisiController@getPagesByCategory')->name('kompetisi.index');
Route::get('/kompetisi/{kategori}/daftar', 'KompetisiController@getPageDaftar')->name('kompetisi.daftar');
Route::post('/kompetisi/{kategori}/store', 'Admin\KompetisiPenyisihan1@store')->name('kompetisi.store');
Route::get('/kompetisi/{kategori}/peserta', 'KompetisiController@getPagePeserta')->name('kompetisi.peserta');

Route::get('/kompetisi/{kategori}/submit', 'SubmissionController@getPageSubmit')->name('kompetisi.submit.index');
Route::get('/kompetisi/{kategori}/submit/store', 'SubmissionController@submitFile')->name('kompetisi.submit.store');

Route::get('/test', function (){

    return view('admin.pages.test');
});

Route::group(['namespace' => 'Admin', 'as' => 'admin.', 'prefix' => 'admin', 'middleware' =>['auth']], function(){

    Route::get('/', 'AdminController@index')->name('dashboard');

    Route::resource('mahasiswa', 'MahasiswaController');
    Route::resource('tim', 'TimController');

    Route::get('penyisihan-1/set-nilai', 'KompetisiPenyisihan1@getSetNilaiPages')->name('penyisihan-1.set-nilai');
    Route::get('penyisihan-2/set-nilai', 'KompetisiPenyisihan2@getSetNilaiPages')->name('penyisihan-2.set-nilai');
    Route::get('final/set-nilai', 'KompetisiFinal@getSetNilaiPages')->name('final.set-nilai');

    Route::group(['middleware' => ['ormawa']], function (){
        Route::post('penyisihan-1/destroy/{tim}', 'KompetisiPenyisihan1@destroy')->name('tim.destroy');
        Route::get('penyisihan-1/create/{kategori}', 'KompetisiPenyisihan1@create')->name('penyisihan-1.create');
        Route::post('penyisihan-1/store/{kategori}', 'KompetisiPenyisihan1@store')->name('penyisihan-1.store');
        Route::post('penyisihan-1/update/{kategori}', 'KompetisiPenyisihan1@update')->name('penyisihan-1.update');
        Route::get('penyisihan-1/{kategori}', 'KompetisiPenyisihan1@index')->name('penyisihan-1.index');

        Route::post('penyisihan-2/down/{kategori}/{tim}', 'KompetisiPenyisihan2@destroy')->name('penyisihan-2.destroy');
        Route::get('penyisihan-2/create/{kategori}', 'KompetisiPenyisihan2@create')->name('penyisihan-2.create');
        Route::post('penyisihan-2/store/{kategori}', 'KompetisiPenyisihan2@store')->name('penyisihan-2.store');
        Route::post('penyisihan-2/update/{kategori}', 'KompetisiPenyisihan2@update')->name('penyisihan-2.update');
        Route::get('penyisihan-2/{kategori}', 'KompetisiPenyisihan2@index')->name('penyisihan-2.index');

        Route::post('final/down/{kategori}/{tim}', 'KompetisiFinal@destroy')->name('final.destroy');
        Route::get('final/create/{kategori}', 'KompetisiFinal@create')->name('final.create');
        Route::post('final/store/{kategori}', 'KompetisiFinal@store')->name('final.store');
        Route::post('final/update/{kategori}', 'KompetisiFinal@update')->name('final.update');
        Route::get('final/{kategori}', 'KompetisiFinal@index')->name('final.index');

    });

    Route::get('ajax/penyisihan-1/{kategori}', 'AjaxController@getPenyisihan1Tim')->name('ajax.penyisihan1');
    Route::get('ajax/penyisihan-2/{kategori}', 'AjaxController@getPenyisihan2Tim')->name('ajax.penyisihan2');
    Route::get('ajax/final/{kategori}', 'AjaxController@getFinalTim')->name('ajax.final');
    Route::get('ajax/mahasiswas', 'AjaxController@getMahasiswas')->name('ajax.mahasiswa');
    Route::get('ajax/tims', 'AjaxController@getTims')->name('ajax.tim');
    Route::get('ajax/nilai/{id}/{babak}', 'AjaxController@getNilai')->name('ajax.get-nilai');
    Route::post('ajax/nilai', 'AjaxController@setNilai')->name('ajax.set-nilai');
    Route::get('ajax/download/{path}', 'AjaxController@downloadFile')->name('ajax.download');

    Route::get('post/', 'PostController@index')->name('post.index');
    Route::get('post/create', 'PostController@create')->name('post.create');
    Route::post('post/store', 'PostController@store')->name('post.store');
    Route::get('post/{post}/edit', 'PostController@edit')->name('post.edit');
    Route::post('post/update/{post}', 'PostController@update')->name('post.update');
    Route::post('post/destroy/{post}', 'PostController@destroy')->name('post.destroy');

});
