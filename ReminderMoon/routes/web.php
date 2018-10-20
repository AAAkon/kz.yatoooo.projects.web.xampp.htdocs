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

 Route::get('/', 'PagesController@index');
 Route::get('profile', 'PagesController@profile');
 Route::get('user', ['uses' => 'UsersController@index']); // uses don't forget
 Route::get('users/create', ['uses' => 'UsersController@create']); 
 Route::post('users', ['uses' => 'UsersController@store'] );
 Route::post('user/change',  ['uses' => 'UsersController@update'] );

 Route::post('createNote', ['uses' => 'NotesController@store']);
 Route::post('createFormula', ['uses' => 'FormulaController@store']);
 Route::post('createCode', ['uses' => 'CodeController@store']);
 Route::post('createPerson', ['uses' => 'PersonController@store']);
 Route::post('createBirthdate', ['uses' => 'BirthdateController@store']);
 Route::post('createMusic', ['uses' => 'MusicController@store']);


 Route::get('blade', 'PagesController@blade');
 Auth::routes();
 Route::get('/home', 'HomeController@index')->name('home');


Route::get('/api/reklama/{title}','ApiController@getData');
Route::get('/api/reklama/another/{title}','ApiController@getDataFromAnotherProject');