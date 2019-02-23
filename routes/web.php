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

Auth::routes();

//Landing pages


Route::get('/', function () {return view('landing.index');});
Route::get('/cs0', function () {return view('landing.cs0');});




//common
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/changePassword', 'HomeController@changePassword');
Route::post('/changePassword', 'HomeController@changePasswordProcess');
Route::get('/announcements', 'HomeController@announcements')->middleware('announcement');
Route::post('/newAnnouncement', 'HomeController@newAnnouncement')->middleware('announcement');
Route::post('/deleteAnnouncement/{id}', 'HomeController@deleteAnnouncement')->middleware('admin');

//userA
Route::get('/events', 'UserAController@events');
Route::post('/newEvent', 'UserAController@newEvent');
Route::post('/deleteEvent/{id}', 'UserAController@deleteEvent');
Route::get('/coordinators', 'UserAController@coordinators');
Route::post('/newCoordinator', 'UserAController@newCoordinator');
Route::post('/deleteCoordinator/{id}', 'UserAController@deleteCoordinator');
Route::get('/registration', 'UserAController@registration');
Route::post('/newRegistration', 'UserAController@newRegistration');
Route::post('/deleteRegistration/{id}', 'UserAController@deleteRegistration');

//userR
Route::get('/participants', 'UserRController@participants');
Route::post('/payment/{id}', 'UserRController@payment');

//userC
Route::get('/eventParticipants', 'UserCController@eventParticipants');

//userP
Route::get('/registerEvents', 'UserPController@registerEvents');
Route::get('/registerEvent/{id}', 'UserPController@registerEventForm');
Route::post('/registerEventSolo/{id}', 'UserPController@registerEventFormSolo');
Route::post('/registerEventTeam/{id}', 'UserPController@registerEventFormTeam');
Route::get('/participationDetails', 'UserPController@participationDetails');
