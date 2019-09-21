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

Route::resource('/projects', 'PagesController');

Route::post('/projects/{project}/task', 'PagesTasksController@store');
Route::patch('/tasks/{task}', 'PagesTasksController@update');

/*
Route::get('/projects', 'PagesController@index');
Route::get('/projects/create', 'PagesController@create');
Route::get('/projects/{project}', 'PagesController@show');
Route::post('/projects', 'PagesController@store');
Route::get('/projects/{project}/edit', 'PagesController@edit');
Route::patch('/projects/{project}', 'PagesController@update');
Route::delete('/projects/{project}', 'PagesController@destroy');*/