<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about','PagesController@about');
Route::get('contact','PagesController@contact');


//Route::get('articles','ArticleController@index');
//Route::get('articles/create','ArticleController@create');
//Route::get('articles/{id}','ArticleController@show');
//Route::post('articles','ArticleController@store');


Route::resource('articles','ArticleController');
Route::get('items/create','ItemsController@create');
Route::post('items','ItemsController@store');
Route::get('items','ItemsController@index');

Route::resource('items1','Items1Controller');

Route::resource('catogories','CatogoriesController');
Route::resource('books','BooksController');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session st
*/

Route::group(['middleware' => ['web']], function () {
    //
});
