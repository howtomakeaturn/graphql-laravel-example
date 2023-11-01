<?php

namespace App\GraphQL\Mutations;

use Closure;
use App\Models\Subscriber;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;

class CreateSubscriberMutation extends Mutation
{
    protected $attributes = [
        'name' => 'createSubscriber',
    ];

    public function type(): Type
    {
        return Type::boolean();
    }

    public function args(): array
    {
        return [
            'email' => [
                'type' => Type::string(),
            ],
        ];
    }

    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        if (Subscriber::where('email', $args['email'])->count()) {
            return true;
        }

        $subscriber = new Subscriber();

        $subscriber->email = $args['email'];

        $subscriber->save();

        return true;
    }
}
