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

Route::get('/', function () {
    return view('index');
});
Route::get('eventFeed', 'EventsController@index');
Route::get('add-event/{date}', 'EventsController@addEvent');
Route::post('save-event', 'EventsController@saveEvent');
Route::get('view-event/{id}', 'EventsController@getEvent');
Route::get('edit-event/{id}', 'EventsController@editEvent');
Route::post('update-event', 'EventsController@updateEvent');
Route::get('delete-event/{id}', 'EventsController@deleteEvent');