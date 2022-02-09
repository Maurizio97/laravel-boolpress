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
        DB::table('tags')->insert([
            ['name' => '#Boolean'],
            ['name' => '#Code'],
            ['name' => '#Coding'],
            ['name' => '#Challenge'],
            ['name' => '#OnFire'],
            ['name' => '#Sono'],
            ['name' => '#Il'],
            ['name' => '#mejo'],
            ['name' => '#Developer'],
            ['name' => '#Di'],
            ['name' => '#Roma'],
        ]);

        Schema::disableForeignKeyConstraints();
        for ($i = 1; $i < 40; $i++) {
            DB::table('post_tag')->insert(
                ['post_id' => rand(1, 30), 'tag_id' => rand(1, 10)]
            );
        }
        
        // factory(Tag::class,30) -> create() -> each(function($tags){
        //     $posts = Post::inRandomOrder() -> limit(5) -> get();
        //     $tags -> posts() -> attach($posts);
        //     $tags -> save();
        // });
        
    }
}
