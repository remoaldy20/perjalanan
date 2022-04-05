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
    return view('layouts.landingpage');
});


Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/register', 'AuthController@register')->name('register');
Route::post('/postregister','AuthController@postregister');
Route::get('/logout', 'AuthController@logout');


Route::group(['middleware' => ['auth','checkrole:admin']], function(){
    Route::get('/admin/index', 'AdminController@index');
    Route::get('/admin/cetak-pdf', 'AdminController@cetak_pdf');
});

Route::group(['middleware' => ['auth','checkrole:user']], function(){
    Route::get('/perjalanan', 'PerjalananController@index');
    Route::get('/perjalanan/create', 'PerjalananController@create');
    Route::post('/perjalanan/store', 'PerjalananController@store');
    Route::get('/perjalanan/delete/{id}', 'PerjalananController@delete');
});

Route::group(['middleware' => 'auth'], function(){

    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    
    Route::get('/profile/{id}','UserController@edit');
    Route::put('/profile/update/{id}','UserController@update');

});
