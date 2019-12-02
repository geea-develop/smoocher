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

Route::get('/', 'ProductController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/getting-started', function() {return view('getting_started');})->name('getting-started');

Route::get('/product/{product_id}/campaign/{campaign_key}', 'CampaignController@getKey');

Route::resource('campaign', 'CampaignController');