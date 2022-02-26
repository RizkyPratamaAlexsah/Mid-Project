<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\addController;

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

// LANDING PAGE ROUTE 
Route::get('/', function () {
    return view('booklist');
});

// DATABASE ROUTE
Route::get('/addbook', [
    addController::class, 'addbook'
])->name('addbook');

Route::post('/booklist', [
    addController::class, 'storeBook'
])->name('storeBook');

// WEBPAGES ROUTE
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/addbook', function () {
    return view('addbook');
})->name('addbook');

Route::get('/booklist', function () {
    return view('booklist');
})->name('booklist');

Route::get('/deletebook', function () {
    return view('deletebook');
})->name('deletebook');

Route::get('/managebook', function () {
    return view('managebook');
})->name('managebook');