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

Route::get('/engineering', function () {
    return view('engineering');
});

Route::get('/production', function () {
    return view('production');
});

Route::get('/assembly', function () {
    return view('assembly');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/certification', function () {
    return view('certification');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/projects/filter-cabinet', function () {
    return view('filter-cabinet');
});

Route::get('/projects/filtration-tower', function () {
    return view('filtration-tower');
});

Route::get('/projects/floating-pontoon', function () {
    return view('floating-pontoon');
});

Route::get('/projects/spiral-staircase', function () {
    return view('spiral-staircase');
});

Route::get('/openings', function () {
    return view('openings');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', 'ContactController@sendEmail');
