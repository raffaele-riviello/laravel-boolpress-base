<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use Carbon\Carbon;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) {
            $post= new Post;
            $post->published = rand(0,1);
            $post->title = $faker->sentence(6, true);
            $now = Carbon::now()->format('Y-m-d-H-i-s');
            $post->slug = Str::slug($post->title, '-') . $now;
            $post->author = $faker->name();
            $post->excerpt = $faker->paragraph(1, true);
            $post->body = $faker->paragraph(6, true);
            $post->img = 'https://placeimg.com/640/360/any';
            $post->save();
        }
    }
}
