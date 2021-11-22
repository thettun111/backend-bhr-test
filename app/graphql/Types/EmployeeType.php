<?php
namespace App\GraphQL\Types;

use App\Employee;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

Class EmployeeType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Employee',
        'description' => 'Collection of employee',
        'model' => Employee::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of a particular employee',
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Name of Employee'
            ],
            'address' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Address of Employee'
            ],
            'phone_number' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Phone Number of Employee'
            ]
        ];
    }
}
