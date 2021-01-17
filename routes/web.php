<?php

use App\Http\Controllers\Front\UserController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

define('PAGINATION_COUNT',3);


Route::get('/','Front\TodoController@index')->name('home');
Route::get('/showTodo/{id}','Front\TodoController@showTodo');
Route::get('/todo/create','Front\TodoController@create')->name('create');
Route::post('/todo/save','Front\TodoController@store')->name('Todo.save');

Route::get('/todo/edit/{id}','Front\TodoController@edit')->name('Todo.edit');
Route::post('/todo/update/{id}','Front\TodoController@update')->name('Todo.update');

Route::get('/todo/delete/{id}','Front\TodoController@delete')->name('Todo.delete');




