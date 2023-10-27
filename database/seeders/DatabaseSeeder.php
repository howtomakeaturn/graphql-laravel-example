<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->seedProducts();

        $this->seedComments();

        \App\Models\Subscriber::factory()->count(100)->create();

        \App\Models\Product::factory()
            ->has(\App\Models\Comment::factory()->count(3))
            ->count(10)
            ->create();
    }

    public function seedProducts()
    {
        DB::table('products')->insert([
            'name' => 'GraphQL + Laravel Consulting Service',
            'description' => "Hi I'm Chuan-Hao, the creator of 'GraphQL Laravel Example' project." .
                PHP_EOL . PHP_EOL .
                "If you are interested in the tech stack and need my help, please visit https://xxx.xxx for more information.",
            'price' => 12345678,
            'is_highlighted' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'GraphQL + Laravel 顧問服務',
            'description' => "您好，我是阿川，「GraphQL Laravel Example」專案的作者。" .
                PHP_EOL . PHP_EOL .
                "如果您有興趣在專案中導入這些技術，歡迎參考我的顧問服務 https://xxx.xxx",
            'price' => 12345678,
            'is_highlighted' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function seedComments()
    {
        DB::table('comments')->insert([
            'content' => 'You can use graphql in the laravel project! It has many benefits!',
            'product_id' => 1,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('comments')->insert([
            'content' => 'No matter you are a small team or a big team, graphql can help you a lot!',
            'product_id' => 1,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('comments')->insert([
            'content' => '貴公司使用 laravel 框架嗎？很適合使用 graphql 技術來加速開發喔！',
            'product_id' => 2,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('comments')->insert([
            'content' => '不論是小型新創或者是大型開發團隊，graphql 技術都會對團隊工作很有幫助！',
            'product_id' => 2,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
