<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//Route::get('/avtoriz', function()
//{
  //return View::make('test');
//});
Route::get('search_data', 'KomersController@search_data');
Route::get('редактирование_обьекта', 'KomersController@redactor_obj');
Route::get('dell_object', 'KomersController@dell_object');
Route::get('spravochnik_data', 'KomersController@spravochnik_data');
Route::get('справочник_обьектов', 'KomersController@spravochnik_obj');
Route::get('создать_обьект', 'KomersController@index');
Route::get('add_object', 'KomersController@add_object');
Route::get('udate_object', 'KomersController@udate_object');
Route::get('/', 'HomeController@avtoriz');
Route::get('avtoriz', 'HomeController@avtoriz');
Route::get('validate', 'HomeController@validate');
//Route::get('select_avto', 'HomeController@select_avto');
//Route::get('add_model', 'HomeController@add_model');
Route::get('home', 'HomeController@index');
Route::get('exit', 'HomeController@exit2');



//Route::get('home', 'HomeController@index');
//Route::get('/home', function()
//{
  //return View::make('home');
//});