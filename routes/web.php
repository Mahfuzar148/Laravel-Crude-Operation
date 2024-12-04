<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/',[BookController::class,'Index'])->name('books.index');

// Route::get('/books/{id}/show',[BookController::class,'Show']);
// Route::get('/books/show/{id}',[BookController::class,'Show']);
Route::get('/books/show/{id}', [BookController::class, 'Show'])->name('books.show');

Route::get('/books/create',[BookController::class,'create'])->name('books.create');

Route::controller(BookController::class)->group(function(){
    Route::post('/books/store','store')->name('books.store');

    Route::get('/books/edit/{id}','edit')->name('books.edit');
    Route::put('/books/update','update')->name('books.update');
    Route::delete('/books/delete','destroy')->name('books.destroy');
});