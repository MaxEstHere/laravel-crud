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
Route::get('/authors', 'AuthorsController@show')->name('authors');
Route::get('/books', 'BooksController@show')->name('books');
Route::get('/author/{author}', 'BooksController@book');
Route::post('/books', 'BooksController@insert');
Route::any('books/{id}', 'BooksController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
