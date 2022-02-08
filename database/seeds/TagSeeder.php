<?php

use Illuminate\Database\Seeder;

use App\Post;
use App\Tag;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('tags')->insert([
        //     ['name' => '#Boolean'],
        //     ['name' => '#Code'],
        //     ['name' => '#Coding'],
        //     ['name' => '#Challenge'],
        //     ['name' => '#OnFire'],
        //     ['name' => '#Sono'],
        //     ['name' => '#Il'],
        //     ['name' => '#mejo'],
        //     ['name' => '#Developer'],
        //     ['name' => '#Di'],
        //     ['name' => '#Roma'],
        // ]);
        factory(Tag::class,30) -> create() -> each(function($tags){
            $posts = Post::inRandomOrder() -> limit(5) -> get();
            $tags -> posts() -> attach($posts);
            $tags -> save();
        });
        
    }
}
