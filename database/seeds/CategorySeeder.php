<?php

use Illuminate\Database\Seeder;

use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'categoria 1'],
            ['name' => 'categoria 2'],
            ['name' => 'categoria 3'],
            ['name' => 'categoria 4'],
            ['name' => 'categoria 5'],
            ['name' => 'categoria 6'],
            ['name' => 'categoria 7'],
            ['name' => 'categoria 8'],
            ['name' => 'categoria 9'],
            ['name' => 'categoria 10'],
        ]);
    }
}
