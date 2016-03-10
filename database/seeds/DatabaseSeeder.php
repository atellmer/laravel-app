<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();
        $this->call('PostSeeder');
        Model::reguard();
    }
}



class PostSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->delete();
        Post::create([
            'title' => 'First Post',
            'slug' => 'first-post',
            'excerpt' => '<b>First Post body</b>',
            'content' => '<b>Content First Post body</b>',
            'published' => true,
            'published_at' => DB::raw('CURRENT_TIMESTAMP')
            ]);

        Post::create([
            'title' => 'Second Post',
            'slug' => 'second-post',
            'excerpt' => '<b>First Post body</b>',
            'content' => '<b>Content First Post body</b>',
            'published' => false,
            'published_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        Post::create([
            'title' => 'Third Post',
            'slug' => 'third-post',
            'excerpt' => '<b>First Post body</b>',
            'content' => '<b>Content First Post body</b>',
            'published' => false,
            'published_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}