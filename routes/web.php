<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('app::index');

Route::get('/FAQ', 'PagesController@showFrequentlyAskedQuestions')->name('pages::faq');
Route::get('/2016/register', 'ContestController@register')->name('contest::register');
Route::post('/subscribe', 'PagesController@storeSubscribedEmail')->name('app::subscribe');

Auth::routes();

Route::get('/home', 'HomeController@index');
