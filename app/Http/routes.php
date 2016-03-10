<?php

/*
Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['web']], function () {
    //
});
*/


Route::get('/', ['as' => 'posts', 'uses' => 'PostController@index']);