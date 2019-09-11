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

Route::get('/respuesta', function(){
    return view('welcome');
})->name('respuesta');

Route::get('activacion/{codigo}', 'UserController@activate')->name('activate');
Route::post('complete/{id}','UserController@complete')->name('complete');

//users
Route::get('/user/show/{user}', 'UserController@show')->name('user.show');
Route::delete('/user/delete/{user}','UserController@destroy')->name('user.destroy');
Route::get('/user/edit/{user}','UserController@edit')->name('user.edit');
Route::put('/user/update/{id}','UserController@update')->name('user.update');
