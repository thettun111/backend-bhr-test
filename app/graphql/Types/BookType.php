<?php
namespace App\GraphQL\Types;

use App\Book;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

Class BookType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Book',
        'description' => 'Collection of books and details of Author',
        'model' => Book::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of a particular book',
            ],
            'author' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Name ot Author',
            ],
            'book_name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Name of a particular book'
            ]
        ];
    }
}
