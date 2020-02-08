<?php

use Illuminate\Support\Facades\Route;

//use Symfony\Component\Routing\Route;

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

Route::get('/','PagesController@getHome');
Route::get('/about','PagesController@getAbout');
Route::get('/contact','PagesController@getContact');


Route::get('/messages','MessagesController@getmessages');

Route::post('/contact/submit','MessagesController@submit');

/*todos projects*/ 
Route::resource('todos','TodoController');