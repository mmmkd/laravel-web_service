<?php

use App\Models\Book;
use Illuminate\Http\Request;

// Retrieve all books
Route::get('/books', function () {
    return Book::all();
});

// Retrieve a single book by ID
Route::get('/books/{id}', function ($id) {
    return Book::findOrFail($id);
});

// Add a new book
Route::post('/books', function (Request $request) {
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'genre' => 'nullable|string|max:255',
        'published_year' => 'nullable|integer',
    ]);

    $book = Book::create($validatedData);
    return response()->json($book, 201);
});
