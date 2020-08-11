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

Auth::routes();
Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/postimage', 'PostImageController@index')->name('postimage.index');
    Route::get('/postimage/create', 'PostImageController@create')->name('postimage.create');
    Route::post('/postimage/store', 'PostImageController@store')->name('postimage.store');
    Route::get('/postimage/edit/{id}', 'PostImageController@edit')->name('postimage.edit');
    Route::put('/postimage/update/{id}', 'PostImageController@update')->name('postimage.update');
    Route::post('/postimage/destroy/{id}', 'PostImageController@destroy')->name('postimage.destroy');
    Route::get('/postimage/addlike/{id}/{like_image}', 'PostImageController@addlike')->name('postimage.addlike');
    Route::post('/postphoto/store', 'PostPhotoController@store')->name('postphoto.store');
});