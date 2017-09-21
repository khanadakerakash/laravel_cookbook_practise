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
    return view('home');
});

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('upload', 'ImagesController@store');

Route::get('/blog', 'BlogController@index');

Route::get('json', function () {

    return App\Post::paginate();
});

Route::group(['prefix' => 'api/v1', 'middleware' => 'api'], function(){

    Route::resource('posts', 'PostsController');
});