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


Route::get('/', 'SiteController@index')->name('home');
    
Route::post('/image/api', 'SiteController@ApiCall');
Route::get('/winner/images', 'SiteController@winnerApi');
Route::get('/share', 'SiteController@share');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/approve-image', 'HomeController@approveImage')->name('approve');
    Route::post('/mark-as-winner', 'HomeController@markAsWinnner')->name('winner');
    Route::get('/image-list', 'HomeController@getAllImages')->name('imageslist');
    Route::get('/get-contest-list', 'HomeController@getAllContestList')->name('contestlist');
});
