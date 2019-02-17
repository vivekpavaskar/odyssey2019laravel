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
    return view('welcome');
});

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/changePassword', 'HomeController@changePassword');
Route::post('/changePassword', 'HomeController@changePasswordProcess');

//userA
Route::get('/events', 'UserAController@events');
Route::post('/newEvent', 'UserAController@newEvent');
Route::post('/deleteEvent/{id}', 'UserAController@deleteEvent');
Route::get('/coordinators', 'UserAController@coordinators');
Route::post('/newCoordinator', 'UserAController@newCoordinator');
Route::post('/deleteCoordinator/{id}', 'UserAController@deleteCoordinator');

Route::get('/registration', 'UserAController@registration');

//userP
Route::get('/registerEvents', 'UserPController@registerEvents');
