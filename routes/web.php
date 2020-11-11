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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', 'HomeController@index');

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/profile', function () {
    return view('profile');
})->middleware('auth');

Route::get('/editprofile', function () {
    return view('editprofile');
})->middleware('auth');

// Route::get('/changePassword','PasswordController@showChangePasswordForm')->name('changePassword')->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/changePassword', 'PasswordController@showChangePasswordForm')->name('changePassword');
    Route::patch('/changePassword', 'PasswordController@update')->name('changePassword.update');
});

Route::get('/profile/{user}/editprofile', 'UserController@edit');
Route::patch('/editprofile', 'UserController@update');

Route::get('/about', function () {
    return view('about');
});


//Gallery
Route::get('/gallery', 'GalleryController@index');
Route::get('/uploadgallery', function () {
    return view('uploadgallery');
})->middleware('auth');
Route::post('/uploadgallery', 'GalleryController@store')->middleware('auth');
Route::get('/galleryuser', 'GalleryController@untukuser');
Route::delete('/galleryuser/{gallerys}', 'GalleryController@destroy');

Route::get('/artikel', 'ArticleController@index');
Route::get('/tambahartikel', function () {
    return view('tambahartikel');
})->middleware('auth');
Route::post('/tambahartikel', 'ArticleController@store')->middleware('auth');
Route::get('/artikeluser', 'ArticleController@untukuser');
Route::patch('/artikeluser/{artikel}', 'ArticleController@update');
Route::get('/artikeluser/{artikel}/editartikel', 'ArticleController@edit');
Route::delete('/artikeluser/{artikel}', 'ArticleController@destroy');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
