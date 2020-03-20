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

// Route::get('/fashion/login', function () {
//     return view('fashion/login');
// });

Route::get('/fashion/registration', function () {
    return view('fashion/registration');
});

Route::get('/fashion/resetPassword', function () {
    return view('fashion/reset');
});

// Route::get('/fashion', function () {
//     return view('fashion/index');
// });

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

// Route::get('/fashion/faq', function () {
//     return view('fashion/faq');
// });

// Route::get('/fashion/profile', function () {
//     return view('fashion/profile');
// });


Route::get('/fashion', 'HomeController@index')->name('fashion');
Route::get('/fashion/faq', 'HomeController@faq')->name('faq');
Route::get('/fashion/contact', 'HomeController@contact')->name('contact');
Route::get('/fashion/blog', 'HomeController@blog')->name('blog');
Route::get('/fashion/about', 'HomeController@about')->name('about');
Route::get('/fashion/login', 'HomeController@login')->name('fashion/login');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/fashion/profile', 'user@profile')->name('profile');