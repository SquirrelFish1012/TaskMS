<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here registers all routes that can repond to different URIs and 
| call controllers as URI requested
|
*/

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);

Route::resource('tasks', 'TasksController');
