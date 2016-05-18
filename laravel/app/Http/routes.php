<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//php artisan route:cache 报错
Route::get('/', function () {
    return view('welcome');
});

//测试路由！！！！！！！
Route::get('/1', 'myController@TestLocalView');

Route::get('/2', 'myController@TestPackagesView');