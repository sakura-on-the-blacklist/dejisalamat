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

Route::get('/reservations/create', function () {
    return view('reservations.create');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/reservations', 'ReservationsController@store')->name('reservations.store');


