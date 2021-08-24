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

<<<<<<< Updated upstream
=======
Route::get('/reserve', function () {
    return view('reservations.reserve');
});
Route::get('/detail', function () {
    return view('details.detail');
});
Route::get('/login', function () {
    return view('logins.login');
});


>>>>>>> Stashed changes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/philippines/{philippine}', 'EventController@show')->name('philippines.show');
Route::get('/okinawa', 'OkinawaController@index')->name('okinawa.index');


