<?php

namespace Tests\RequestFactories;

use Worksome\RequestFactories\RequestFactory;

class BooksFactory extends RequestFactory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'author' => $this->faker->name,
        ];
    }
}
