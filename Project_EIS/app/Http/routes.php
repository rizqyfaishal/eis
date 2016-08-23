<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/meet-eis', function () {
    return view('meet-eis');
});

Route::get('/our-program', function () {
    return view('our-program');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/ask-our-alumni', function () {
    return view('ask-our-alumni');
});

Route::get('/social-media', function () {
    return view('social-media');
});

Route::get('/old', function () {
    return view('home_old');
});