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

Route::get('/', 'PagesController@getHome')->name('home');

// Route::get('/home', function() {
// 	return view('home');
// });

Route::get('/about', 'PagesController@getAbout')->name('about');

Route::get('/contact', 'PagesController@getContact')->name('contact');
Route::get('/api', 'ApiController@getApi')->name('api');

Route::get('contact/messages', 'ContactController@getMessages')->name('get-messages');

Route::post('contact/submit', 'ContactController@submit')->name('contact-form-submit');

Route::post('api/submit', 'ApiController@submit')->name('api-form-submit');

// Route::get('contact/messages', 'ContactController@exportData')->name('message-export');
