<?php


Route::get('/', ['as' => 'posts', 'uses' => 'PostController@index']);
Route::get('unpublished', ['as' => 'posts.unpublished', 'uses' => 'PostController@getUnPublishedPosts']);

/*
Route::get('post/create', ['as' => 'posts.create', 'uses' => 'PostController@create']);
Route::post('post', ['as' => 'posts.store', 'uses' => 'PostController@store']);
Route::get('post/{post}', ['as' => 'posts.show', 'uses' => 'PostController@show']);
Route::get('post/{post}/edit', ['as' => 'posts.edit', 'uses' => 'PostController@edit']);
Route::post('post/{post}', ['as' => 'posts.update', 'uses' => 'PostController@update']);
*/

$router -> resource('post', 'postController');