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
    return view('home');
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

Route::auth();

Route::get('/login', function () {
    return view('login');
});

//start dashboard
Route::get('/dashboard', function () {
    return view('dashboard-admin-home');
});

Route::get('/dashboard/inbox', function () {
    return view('dashboard-admin-inbox');
});

Route::get('/dashboard/members', function () {
    return view('dashboard-admin-member-manager');
});

Route::get('/dashboard/research', function () {
    return view('dashboard-admin-randi-manager');
});

Route::get('/dashboard/event', function () {
    return view('dashboard-admin-event-manager');
});

Route::get('/dashboard/program', function () {
    return view('dashboard-admin-program-manager');
});

Route::get('/dashboard/eis-team', function () {
    return view('dashboard-admin-eisteam-manager');
});

Route::get('/dashboard/send', function () {
    return view('dashboard-admin-send');
});