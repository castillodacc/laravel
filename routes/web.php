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


Route::get('/', ['as'=>'home', 'uses'=>'PagesController@home']);

//Route::get('contacto/{asd?}', ['as'=>'contacto', 'uses'=>'PagesController@contact']);
Route::post('contacto' ,'PagesController@mensajes');

Route::get('saludo/{nombre?}', ['as'=>'saludos', 'uses'=>'PagesController@saludo']);


Route::get('messages/create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);

Route::post('messages',['as' => 'messages.store','uses' => 'MessagesController@store']);

Route::get('messages/index', ['as' => 'messages.index', 'uses' => 'MessagesController@index']);

Route::get('messages/{id}/edit', ['as' => 'messages.edit', 'uses' => 'MessagesController@edit']);

Route::get('messages/show/{id?}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);

Route::put('messages/{id?}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);

Route::delete('messages/{id}', ['as' => 'messages.destroy', 'uses' => 'MessagesController@destroy']);



