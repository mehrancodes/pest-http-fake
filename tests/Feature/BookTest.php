<?php

use Illuminate\Support\Facades\Http;

it('can get a list of books from the API', function ($responseData) {
    Http::fake([
        '*' => Http::response(
            body: $responseData
        ),
    ]);

    $books = Http::get('https://books-api.com/books');

    expect($books->json())->toEqual($responseData);

    collect($books->json('data'))->each(function ($book) {
        expect($book['author'])->toEqual('J R R Tolkien');
    });
})->with('books-list');

it('can get a list of books from the API 1', function ($responseData) {
    Http::fake([
        '*' => Http::response(
            body: $responseData
        ),
    ]);

    $books = Http::get('https://books-api.com/books');

    expect($books->json())->toEqual($responseData);

    collect($books->json('data'))->each(function ($book) {
        expect($book['author'])->toEqual('J R R Tolkien');
    });
})->with('books-list');

it('can get a list of books from the API 2', function ($responseData) {
    Http::fake([
        '*' => Http::response(
            body: $responseData
        ),
    ]);

    $books = Http::get('https://books-api.com/books');

    expect($books->json())->toEqual($responseData);

    collect($books->json('data'))->each(function ($book) {
        expect($book['author'])->toEqual('J R R Tolkien');
    });
})->with('books-list');

it('can get a list of books from the API 3', function ($responseData) {
    Http::fake([
        '*' => Http::response(
            body: $responseData
        ),
    ]);

    $books = Http::get('https://books-api.com/books');

    expect($books->json())->toEqual($responseData);

    collect($books->json('data'))->each(function ($book) {
        expect($book['author'])->toEqual('J R R Tolkien');
    });
})->with('books-list');

it('can get a list of books from the API 5', function ($responseData) {
    Http::fake([
        '*' => Http::response(
            body: $responseData
        ),
    ]);

    $books = Http::get('https://books-api.com/books');

    expect($books->json())->toEqual($responseData);

    collect($books->json('data'))->each(function ($book) {
        expect($book['author'])->toEqual('J R R Tolkien');
    });
})->with('books-list');

it('can get a list of books from the API 6', function ($responseData) {
    Http::fake([
        '*' => Http::response(
            body: $responseData
        ),
    ]);

    $books = Http::get('https://books-api.com/books');

    expect($books->json())->toEqual($responseData);

    collect($books->json('data'))->each(function ($book) {
        expect($book['author'])->toEqual('J R R Tolkien');
    });
})->with('books-list');
it('can get a list of books from the API 7', function ($responseData) {
    Http::fake([
        '*' => Http::response(
            body: $responseData
        ),
    ]);

    $books = Http::get('https://books-api.com/books');

    expect($books->json())->toEqual($responseData);

    collect($books->json('data'))->each(function ($book) {
        expect($book['author'])->toEqual('J R R Tolkien');
    });
})->with('books-list');

it('can get a list of books from the API 8', function ($responseData) {
    Http::fake([
        '*' => Http::response(
            body: $responseData
        ),
    ]);

    $books = Http::get('https://books-api.com/books');

    expect($books->json())->toEqual($responseData);

    collect($books->json('data'))->each(function ($book) {
        expect($book['author'])->toEqual('J R R Tolkien');
    });
})->with('books-list');

it('can get a list of books from the API 9', function ($responseData) {
    Http::fake([
        '*' => Http::response(
            body: $responseData
        ),
    ]);

    $books = Http::get('https://books-api.com/books');

    expect($books->json())->toEqual($responseData);

    collect($books->json('data'))->each(function ($book) {
        expect($book['author'])->toEqual('J R R Tolkien');
    });
})->with('books-list');

it('can create a new book', function () {
    $responseData = fixture('BooksApi/create-book');

    Http::fake([
        '*' => Http::response(
            body: $responseData,
            status: 201,
        ),
    ]);

    $book = Http::post('https://books-api.com/books', [
        'title' => 'Spock Must Die!',
        'author' => 'James Blish',
    ]);

    expect($book->json())->toEqual($responseData)
        ->and($book->json('data'))->title->toEqual('Spock Must Die!');
});

it('can delete a book from the API', function () {
    Http::fake([
        '*' => Http::response(
            body: null,
            status: 204,
        ),
    ]);

    $response = Http::delete('https://books-api.com/books/12345');

    expect($response->status())->toEqual(204);
});
