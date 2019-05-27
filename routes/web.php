<?php

Route::get('/', function (){

    return view('welcome');
});

Route::get('/vue', function (){

    return view('vue');
});

Route::resource('projects', 'ProjectsController');

Route::post('/projects/{project}/tasks', 'ProjectTaskController@store');
Route::patch('/tasks/{task}', 'ProjectTaskController@update');


/*
Route::get('/projects', 'ProjectsController@index');
Route::post('/projects', 'ProjectsController@store');
Route::get('/projects/create', 'ProjectsController@create');
*/

