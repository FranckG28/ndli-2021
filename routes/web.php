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
    return view('welcome');
});

Route::get('addrescuer', function () {
    return view('rescuer'); // une partie communautaire permettant à toutes personnes ayant connaissance de sauvetages, de sauveteurs ou même de personnes sauvées
});
