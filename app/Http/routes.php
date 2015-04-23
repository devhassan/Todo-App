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
Route::get('/', 'ProjectsController@index');
Route::model('tasks', 'l5\Models\Task');
Route::model('projects', 'l5\Models\Project');
Route::resource('projects', 'ProjectsController');
Route::resource('projects.tasks', 'TasksController');
Route::bind('tasks', function($value, $route) {
    return l5\Task::whereSlug($value)->first();
});
Route::bind('projects', function($value, $route) {
    return l5\Project::whereSlug($value)->first();
});