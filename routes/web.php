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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/boat', function () {
    return view('boat');
});

Route::get('/boat/list', function () {
    return view('boatList');
});

Route::get('/resquer', function () {
    return view('resquer');
});

Route::get('/resquer/list', function () {
    return view('resquerList');
});

Route::get('/saved', function () {
    return view('saved');
});

Route::get('/saved/list', function () {
    return view('savedList');
});

Route::get('/trips', function () {
    return view('trips');
});

Route::get('/trips/list', function () {
    return view('tripsList');
});

Route::get('/community/boat', function () {
    return view('community.boat');
});

Route::get('/community/resquer', function () {
    return view('community.resquer');
});

Route::get('/community/saved', function () {
    return view('community.saved');
});

Route::get('/community/trips', function () {
    return view('community.trips');
});
