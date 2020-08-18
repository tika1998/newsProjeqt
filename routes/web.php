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

Route::get('/adminPan', function () {
    return view('admin.adminLayouts.app');
})->middleware('is_admin');

Auth::routes();

Route::get('/change/{id}', 'UserController@changeStatus');
//Route::get('/mail', 'UserController@send');
Route::get('/hello', 'UserController@hello');

//Route::get('/unsubscribe/{user}', function (Request $request) {
//    if (!$request->hasValidSignature()) {
//        abort(401);
//    }
//
//})->name('unsubscribe');

Route::resource('user', 'UserController');
Route::resource('category', 'CategoryController');
Route::resource('news', 'NewsConroller');

Route::get('/newsCateg/{id}', 'NewsController@categoryNews');

Route::get('/home', 'HomeController@index')->name('home');
