<?php

use App\Http\Controllers\LoginController;
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


Route::get('/resquer/list', function () {
    return view('resquerList', ['sauveteurs' => App\Models\Sauveteur::get()]);
})->name('resquerList');


Route::get('/resquer/{id}', function ($id) {
    return view('resquer', ['sauveteurs' => App\Models\Sauveteur::find($id)]);
});





Route::get('/saved', function () {
    return view('saved');
})->name('saved');


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

Route::get('/login', function () {
    return view('login');
});

Route::post('/authenticate', [LoginController::class, 'authenticate']);
