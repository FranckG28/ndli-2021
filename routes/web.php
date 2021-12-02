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
<<<<<<< HEAD

Route::get('/home', function () {
    return view('home');
});

Route::get('/boat', function () {
    return view('boat');
});

Route::get('/boatList', function () {
    return view('boatList');
});

Route::get('/resquer', function () {
    return view('resquer');
});

Route::get('/resquerList', function () {
    return view('resquerList');
});

Route::get('/saved', function () {
    return view('saved');
});

Route::get('/savedList', function () {
    return view('savedList');
});

Route::get('/trips', function () {
    return view('trips');
});

Route::get('/tripsList', function () {
    return view('tripsList');
});
=======
>>>>>>> b4c2077cbda014966290c609f2b6d1de30551537
