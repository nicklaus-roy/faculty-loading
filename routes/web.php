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

// Index - Read of CRUD
Route::get('/rooms', 'RoomsController@index');

// Create
Route::get('/rooms/create', 'RoomsController@create');

// Show - Read of CRUD
Route::get('/rooms/{room}', 'RoomsController@show');

// Store
Route::post('/rooms', 'RoomsController@store');

// Edit
Route::get('/rooms/{room}/edit', 'RoomsController@edit');

// Update
Route::put('/rooms/{room}', 'RoomsController@update');

// Delete
Route::delete('/rooms/{room}', 'RoomsController@delete');
Route::get('/rooms/{room}/delete', 'RoomsController@delete');