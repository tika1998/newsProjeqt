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
});

Route::get('/user/verify/{token}', 'UserController@verifyUser');


Auth::routes();


//Route::get('/mail', 'UserController@send');

//Route::get('/unsubscribe/{user}', function (Request $request) {
//    if (!$request->hasValidSignature()) {
//        abort(401);
//    }
//
//})->name('unsubscribe');

Route::resource('news', 'NewsController');


Route::get('/home', 'HomeController@index')->name('home');
