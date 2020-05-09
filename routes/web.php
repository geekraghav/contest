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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'SiteController@index')->name('home');
Route::get('/image/api', 'SiteController@ApiCall')->name('home');
Route::get('/winner/images/{from_hour}/{to_hour}', 'SiteController@winnerApi')->name('home');
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/approve-image', 'HomeController@approveImage')->name('approve');
    Route::get('/mark-as-winner', 'HomeController@markAsWinnner')->name('winner');
    Route::get('/image-list', 'HomeController@getAllImages')->name('imageslist');
});
