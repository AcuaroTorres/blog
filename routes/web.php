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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'articles'], function(){
	Route::get('view/{id}',[
		'uses' => 'TestController@view',
		'as'   => 'articlesView'
	]);
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
	Route::resource('users','UsersController');

	Route::resource('categories','CategoriesController');
	Route::get('categories/{id}/destroy', [
		'uses' => 'CategoriesController@destroy',
		'as'   => 'categories.destroy'
	]);

	Route::resource('tags','TagsController');
	Route::get('tags/{id}/destroy', [
		'uses' => 'TagsController@destroy',
		'as'   => 'tags.destroy'
	]);
});
