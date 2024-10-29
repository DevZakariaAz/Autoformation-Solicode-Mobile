<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::create([
            'title' => 'First Post',
            'body' => 'This is the body of the first post.',
            'category_id' => 1,
        ]);

        Post::create([
            'title' => 'Second Post',
            'body' => 'This is the body of the second post.',
            'category_id' => 2,
        ]);

        Post::create([
            'title' => 'Third Post',
            'body' => 'This is the body of the third post.',
            'category_id' => 3,
        ]);
    }
}
