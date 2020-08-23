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
})->name('welcome');

Route::group(['middleware' => 'is_admin'], function () {
    Route::get('/adminPan', function () {
        return view('admin.adminLayouts.app');
    });
    Route::get('/change/{id}', 'UserController@changeStatus');
    Route::get('/block/{id}', 'UserController@blockUSer');
    Route::resource('user', 'UserController');
    Route::resource('category', 'CategoryController');
    Route::resource('news', 'NewsController');
    Route::get('/newsCateg/{id}', 'NewsController@categoryNews');
    Route::resource('user', 'UserController');
    Route::resource('category', 'CategoryController');
    Route::resource('news', 'NewsController');
    Route::get('/search', 'SearchController@search')->name('search');

});

Route::get('/user/verify/{token}', 'UserController@verifyUser');

Route::get('/welcomeAdmin', function () {
    return view('admin.users.adminPanding');
})->name('welcomeAdmin');


Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
