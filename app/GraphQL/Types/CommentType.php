<?php

namespace App\GraphQL\Types;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;
use Rebing\GraphQL\Support\Facades\GraphQL;

class CommentType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Comment',
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::id(),
            ],
            'content' => [
                'type' => Type::string(),
            ],
            'product' => [
                'type' => GraphQL::type('Product'),
            ],
            'user' => [
                'type' => GraphQL::type('User'),
            ],
            'created_at' => [
                'type' => Type::string(),
            ],
            'updated_at' => [
                'type' => Type::string(),
            ],
        ];
    }
}
