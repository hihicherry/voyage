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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::resource('posts', 'PostController');
Route::resource('artists', 'ArtistsController');
Route::resource('albums', 'AlbumsController');
Route::apiresource('items', 'ItemController');

Route::get('/users/{id}/courses/{course}', 'HomeController@signup')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'HomeController@index');

Route::get('/artists_save', 'ArtistsController@store');

Route::get('/artists/{artist}', 'ArtistsController@show');

Route::get('/artistsupdate/{artist}', 'ArtistsController@update');

Route::get('/albums_show/{id}', 'AlbumsController@show');








