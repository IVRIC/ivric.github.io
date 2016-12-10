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
    return view('pages.landing.page');
})->name('app::index');

Route::get('/sajjad', function (){
    return view('test');
});
Route::get('/FAQ', 'PagesController@showFrequentlyAskedQuestions')->name('pages::faq');
Route::post('/subscribe', 'PagesController@storeSubscribedEmail')->name('app::subscribe');

Auth::routes();

