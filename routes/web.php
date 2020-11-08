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

Route::get('/',  'PagesController@index')->name('welcome');
Route::get('/about',  'PagesController@about')->name('about');
Route::get('/services',  'PagesController@services')->name('services');
Route::get('/estimate',  'PagesController@estimate')->name('estimate');
Route::post('/invest',  'PagesController@store')->name('store')->middleware('verified');
Route::post('/estimate',  'PagesController@getEstimate')->name('calculate')->middleware('verified');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
