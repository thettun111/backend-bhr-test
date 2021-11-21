<?php

namespace App\graphql\Mutations;

use App\Book;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;

class UpdateBookMutation extends Mutation
{
    protected $attributes = [
        'name' => 'updateBook'
    ];

    public function type(): Type
    {
        return GraphQL::type('Book');
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' =>  Type::nonNull(Type::int()),
            ],

            'author' => [
                'name' => 'author',
                'type' =>  Type::nonNull(Type::string()),
            ],

            'book_name' => [
                'name' => 'book_name',
                'type' =>  Type::nonNull(Type::string()),
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $book = Book::findOrFail($args['id']);
        $book->fill($args);
        $book->save();

        return $book;
    }
}
