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


Route::get('/dashboard', function() {
    return redirect(route('login'));
});
Route::get('/', function() {
    return redirect(route('login'));
});
Route::get('/starter', function() {
    return view('starter');
});

Auth::routes(['verify' => false, 'reset' => false]);

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/hari', 'HariController@index')->name('daftarHari');
    Route::get('/mapel', 'MataPelajaranController@index')->name('daftarMapel');
    Route::get('/mapel/create', 'MataPelajaranController@create')->name('createMapel');
    Route::post('/mapel/create', 'MataPelajaranController@store')->name('storeMapel');
    Route::get('/mapel/{mapel}/edit', 'MataPelajaranController@edit')->name('editMapel');
    Route::post('/mapel/{mapel}/edit', 'MataPelajaranController@update')->name('updateMapel');
    Route::get('/mapel/{mapel}/delete', 'MataPelajaranController@destroy')->name('deleteMapel');
});

