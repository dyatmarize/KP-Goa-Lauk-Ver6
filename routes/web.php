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

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/profile', function () {
    return view('profile');
})->middleware('auth');

Route::get('/profile/{user}/editprofile', 'UserController@edit');
Route::patch('/profile/{user}', 'UserController@update');

Route::get('/about', function () {
    return view('about');
});

Route::get('/artikel', 'ArticleController@index');
Route::get('/tambahartikel', function () {
    return view('tambahartikel');
})->middleware('auth');
Route::post('/tambahartikel', 'ArticleController@store')->middleware('auth');
Route::get('/artikeluser', 'ArticleController@untukuser');
Route::patch('/artikeluser/{artikel}', 'ArticleController@update');
Route::get('/artikeluser/{artikel}/editartikel', 'ArticleController@edit');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
