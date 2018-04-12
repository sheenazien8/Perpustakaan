<?php

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

Route::get('books/create','BooksController@create')->name('books.create');

Route::get('books/index', 'BooksController@index')->name('books.index');

Route::post('books', 'BooksController@store')->name('books.store');

Route::get('books/{id}','BooksController@show')->name('books.show');

Route::get('books/{id}/edit','BooksController@edit')->name('books.edit');

Route::patch('books/{id}', 'BooksController@update')->name('books.update');

Route::delete('books/{id}', 'BooksController@destroy')->name('books.destroy');
