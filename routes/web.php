<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

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

// Route::get('/books/add-book', function () {
//     return view('books/add-book');
// });

// Route::get('/books/edit-book', function () {
//     return view('books/edit-book');
// });

// Route::get('/books/show-book', function () {
//     return view('books/show-book');
// });

Route::resource('/books', BooksController::class);
