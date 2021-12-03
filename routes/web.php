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
})->name('home');

Route::get('/boat', function () {
    return view('boat');
})->name('boat');


Route::get('/boat/list', function () {
    return view('boatList');
})->name('boatList');


Route::get('/resquer', function () {
    return view('resquer');
})->name('resquer');


Route::get('/resquer/list', function () {
    return view('resquerList');
})->name('resquerList');

Route::get('/saved/list', function () {
    return view('savedList');
})->name('savedList');


Route::get('/trips', function () {
    return view('trips');
})->name('trips');


Route::get('/trips/list', function () {
    return view('tripsList');
})->name('tripsList');


Route::get('/community/boat', function () {
    return view('community.boat');
})->name('community.boat');


Route::get('/community/resquer', function () {
    return view('community.resquer');
})->name('community.resquer');


Route::get('/community/saved', function () {
    return view('community.saved');
})->name('community.saved');


Route::get('/community/trips', function () {
    return view('community.trips');
})->name('community.trips');
