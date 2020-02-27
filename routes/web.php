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

Route::get('/author/create', 'AuthorController@create');
Route::get('/author/{id}', 'AuthorController@show');
Route::post('/author', 'AuthorController@store');

// TODO: create a author show or something in author/{id}