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
Route::get('unpublished', ['as' => 'posts.unpublished', 'uses' => 'PostController@getUnPublishedPosts']);