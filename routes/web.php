<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return redirect('user/logout');
});

Route::group([ 'prefix' => 'user' ], function () {

    Route::get('login', 'UserController@getLogin');
    Route::post('login', 'UserController@postLogin');
    Route::get('logout', 'UserController@logout');

});

Route::group([ 'prefix' => 'task' ], function () {

    Route::get('index', 'TaskController@index');
    Route::get('create', 'TaskController@create');
    Route::post('store', 'TaskController@store');
    Route::get('{id}', 'TaskController@show');
    Route::get('{id}/edit', 'TaskController@edit');
    Route::patch('{id}/done', 'TaskController@done');
    Route::patch('update/{id}', 'TaskController@update');
    Route::delete('{id}', 'TaskController@destroy');

});
