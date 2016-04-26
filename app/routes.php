<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('topics', 'TopicsController');
Route::resource('sections', 'SectionsController');
Route::resource('questions', 'QuestionsController');

Route::get('/', function()
{
	return "nothing here";
});
