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
    echo '111';
});
Route::group(['prefix'=>'home'],function (){
    Route::get('/','Home\IndexController@index');
    Route::get('add','Home\IndexController@add');
    Route::get('del','Home\IndexController@del');
    Route::get('update','Home\IndexController@update');
    Route::get('select','Home\IndexController@select');
    Route::get('show','Home\IndexController@show');
});

