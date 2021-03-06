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

//视图
Route::get('test','TestController@test');
Route::get('test1','TestController@test1');

//csrf验证
Route::get('test2','TestController@test2');
Route::post('test3','TestController@test3');

//模型增删改查
Route::get('test4','TestController@test4');
Route::get('test5','TestController@test5');
Route::any('test6','TestController@test6');
Route::get('test7','TestController@test7');
Route::get('test8','TestController@test8');
Route::any('test9','TestController@test9');

//file文件上传
Route::group(['prefix'=>'file'],function (){
    Route::any('/','File\IndexController@index');
    Route::get('/show','File\IndexController@show');
    Route::get('/list','File\IndexController@list');
    Route::get('/list1','File\IndexController@list1');
});

//Session
Route::get('session','TestController@see');
Route::get('cache','TestController@cache');

//连表查询
Route::get('sql','TestController@sql');
