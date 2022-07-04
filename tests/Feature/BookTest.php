<?php

use Illuminate\Support\Facades\Http;
use Tests\RequestFactories\BooksFactory;

it('can get a list of books from the API', function () {
    $responseData = ['data' => [BooksFactory::new()->create(['author' => 'J R R Tolkien'])]];

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
});

it('can get a list of books from the API 1', function () {
    $responseData = ['data' => [BooksFactory::new()->create(['author' => 'J R R Tolkien'])]];

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
});

it('can get a list of books from the API 2', function () {
    $responseData = ['data' => [BooksFactory::new()->create(['author' => 'J R R Tolkien'])]];

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
});

it('can get a list of books from the API 3', function () {
    $responseData = ['data' => [BooksFactory::new()->create(['author' => 'J R R Tolkien'])]];

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
});

it('can get a list of books from the API 5', function () {
    $responseData = ['data' => [BooksFactory::new()->create(['author' => 'J R R Tolkien'])]];

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
});

it('can get a list of books from the API 6', function () {
    $responseData = ['data' => [BooksFactory::new()->create(['author' => 'J R R Tolkien'])]];

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
});
it('can get a list of books from the API 7', function () {
    $responseData = ['data' => [BooksFactory::new()->create(['author' => 'J R R Tolkien'])]];

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
});

it('can get a list of books from the API 8', function () {
    $responseData = ['data' => [BooksFactory::new()->create(['author' => 'J R R Tolkien'])]];

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
});

it('can get a list of books from the API 9', function () {
    $responseData = ['data' => [BooksFactory::new()->create(['author' => 'J R R Tolkien'])]];

    Http::fake([
        '*' => Http::response(
            body: $responseData
        ),
    ]);

    $books = Http::get('https://books-api.com/books');

    expect($books->json())->toEqual($responseData);

    collect($books->json('data'))->each(function ($book) use ($responseData) {
        expect($book['author'])->toEqual('J R R Tolkien');
    });
});

it('can create a new book', function () {
    $responseData = ['data' => BooksFactory::new()->create()];

    Http::fake([
        '*' => Http::response(
            body: $responseData,
            status: 201,
        ),
    ]);

    $book = Http::post('https://books-api.com/books', $responseData);

    expect($book->json())->toEqual($responseData)
        ->and($book->json('data'))->title->toEqual($responseData['data']['title']);
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
