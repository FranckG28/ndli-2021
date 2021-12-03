<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddRescuerController;

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




Route::get('/boat/list', function () {
    return view('boatList', ['bateaux' => App\Models\Bateau::get()]);
})->name('boatList');

Route::get('/boat/{id}', function ($id) {
    return view('boat', ['bateau' => App\Models\Bateau::find($id)]);
})->name('boat');


Route::get('/resquer/list', function () {
    return view('resquerList', ['sauveteurs' => App\Models\Sauveteur::get()]);
})->name('resquerList');


Route::get('/resquer/{id}', function ($id) {
    return view('resquer', ['sauveteurs' => App\Models\Sauveteur::find($id)]);
})->name('resquer');


Route::get('/saved/list', function () {
    return view('savedList', ['sauves' => App\Models\Sauve::get()]);
})->name('savedList');

Route::get('/saved/{id}', function ($id) {
    return view('saved', ['sauve' => App\Models\Sauve::find($id)]);
})->name('saved');


Route::get('/trips/list', function () {
    return view('tripsList', ['trips' => App\Models\Sauvetage::get()]);
})->name('tripsList');

Route::get('/trips/{id}', function ($id) {
    return view('trips', ['trips' => App\Models\Sauvetage::find($id)]);
})->name('trips');


Route::get('/community/boat', function () {
    return view('community.boat');
})->name('community.boat');


Route::get('/community/resquer', function () {
    return view('community.resquer');
})->name('community.resquer');


 Route::get('/community/saved', function () {
     return view('community.saved');
 });

Route::post('add_rescue', [AddRescuerController::class, 'add_rescue'])->name('add_rescue');


Route::get('/community/trips', function () {
    return view('community.trips');
})->name('community.trips');
