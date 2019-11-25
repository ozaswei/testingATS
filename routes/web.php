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
Route::get('/test','BackendController@test')->name('test');
Route::get('/register','BackendController@register')->name('register');
Route::post('/store','BackendController@store')->name('store');
Route::get('/loginpage','BackendController@loginpage')->name('loginpage');
Route::post('/login_operation','BackendController@login_operation')->name('logging');

Route::group(['prefix'=>'dashboard'],function(){

    Route::get('/{id}','BackendController@dashboard')->name('dashboard');

    Route::get('/create_position/{id}','BackendController@create_position')->name('create_position');
    Route::post('/store_postion/{id}','BackendController@store_position')->name('store_position');
    Route::get('/details/{id}','BackendController@details');
    Route::get('/details/description/{id}','BackendController@description');
    Route::get('/details/edit_position/{id}','BackendController@edit_position');
    Route::post('/details/position_edited/{id}','BackendController@position_edited');
    Route::get('/details/delete_position/{id}','BackendController@delete_position');
});
