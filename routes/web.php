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

//defaultページ
Route::get('/', function () {
    return view('welcome');
});

//一覧ページ
Route::get('list', 'PostController@list');

//作成フォーム
Route::get('create', function () {
    return view('create');
});

//作成処理
Route::post('create', 'PostController@create');
