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
    return view('content/home');
})->name('home');

Route::get('/clients', 'ClientsController@index')->name('clients');
Route::get('/clients/new', 'ClientsController@newClient')->name('new_clients');
Route::get('/clients/{id}', 'ClientsController@show')->name('show_clients');

Route::get('/reservation/{user_id}', 'ReservationsController@index')->name('reservations');
Route::post('/reservation/{user_id}', 'ReservationsController@index')->name('reservations');
Route::get('book/room/{client_id}/{room_id}/{date_in}/{date_out}', 'ReservationsController@bookRoom')->name('book_room');