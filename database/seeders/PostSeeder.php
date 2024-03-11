<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            //$post = new Post();
            //$post->title = fake()->sentence();
            //$post->content = fake()->paragraph();
            //$post->save();

            $post = Post::create([
                'title' => fake()->sentence(),
                'content' => fake()->paragraph()
            ]);
        }
    }
}
