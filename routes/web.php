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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/register', 'TestCRUDController@header');
// Route::get('/login', 'TestCRUDController@header');


Route::get('/fashion', function () {
    return view('fashion/index');
});

Route::get('/fashion/test', function () {
    return view('fashion/index1');
});

Route::get('/fashion/contact', function () {
    return view('fashion/contact');
});

Route::get('/fashion/blog', function () {
    return view('fashion/blog');
});

Route::get('/fashion/about', function () {
    return view('fashion/about');
});

Route::get('/fashion/shoppingsearch', function () {
    return view('fashion/shoppingsearch');
});

Route::get('/fashion/shop', function () {
    return view('fashion/shop');
});

Route::get('/fashion/checkout', function () {
    return view('fashion/checkout');
});

Route::get('/fashion/payment', function () {
    return view('fashion/payment');
});

Route::get('/fashion/faq', function () {
    return view('fashion/faq');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
