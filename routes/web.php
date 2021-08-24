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
Route::get('/philippines', function () {
    return view('events.philippines');
});
Route::get('/okinawa', function () {
    return view('events.okinawa');
});

Route::get('/reserve', function () {
    return view('reservations.reserve');
});
Route::get('/show', function () {
    return view('events.show');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/events/{event}', 'EventController@show')->name('events.show');


Route::get('/events/{event}/comments/create','CommentController@create')->name('comment.create');

Route::post('/events/{event}/comments','CommentController@store')->name('comment.store');


