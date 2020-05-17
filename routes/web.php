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
    return view('user.index');
});

Route::get('/about', function () {
    return view('user.about');
});

Route::get('/services', function () {
    return view('user.services');
});

Route::get('/contact', function () {
    return view('user.contact');
});

Auth::routes();
Route::group(['prefix'=>'admin','namespace'=>'admin'] ,function(){
    Route::get('/', 'adminController@index');
    Route::resource('/users', 'userController');

});

// Route::get('/home', 'HomeController@index')->name('home');
 