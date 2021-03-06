<?php

use Illuminate\Support\Facades\Route;

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


Route::middleware('auth')->group(function () {

    Route::get('/chirps', 'ChirpsController@index')->name('home');
    Route::post('/chirps', 'ChirpsController@store');
    Route::post('/chirps/{chirp}/like', 'ChirpLikesController@store');
    Route::delete('/chirps/{chirp}/like', 'ChirpLikesController@destroy');

    Route::post('/profiles/{user:username}/follow', 'FollowsController@store')->name('follow');
    Route::get('/profiles/{user:username}/edit', 'ProfilesController@edit')->middleware('can:edit,user');
    Route::patch('/profiles/{user:username}', 'ProfilesController@update')->middleware('can:edit,user');

    Route::get('/explore', 'ExploreController');

});

Route::get('/profiles/{user:username}', 'ProfilesController@show')->name('profile');

Auth::routes();
