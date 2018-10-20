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
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@index');
Route::get('/profile/{username}', 'ProfileController@profile');
Route::get('/profile', 'ProfileController@users');
Route::post('/uhq', 'UserHumanQualityController@update');


Route::get('/chat', 'ChatController@index');
Route::post('/sendMessage','ChatController@sendMessage');
Route::post('/isTyping','ChatController@isTyping');
Route::post('/notTyping','ChatController@notTyping');
Route::post('/retrieveChatMessages','ChatController@retrieveChatMessages');
Route::post('/retrieveTypingStatus','ChatController@retrieveTypingStatus');

Route::get('/api/reklama/{title}','ApiController@getData');
Route::get('/api/reklama/another/{title}','ApiController@getDataFromAnotherProject');