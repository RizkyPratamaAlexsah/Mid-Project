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

Route::get('/', function () {
    return view('booklist');
});

Route::get('/create/book', [
    addController::class, 'addbook'
])->name('addbook');

Route::get('/store/book', [
    addController::class, 'storeBook'
])->name('storeBook');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/addbook', function () {
    return view('addbook');
})->name('addbook');

Route::get('/booklist', function () {
    return view('booklist');
})->name('booklist');