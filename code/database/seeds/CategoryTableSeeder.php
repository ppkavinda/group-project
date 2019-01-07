<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::create([
            'title' => 'clothes'
        ]);
        \App\Category::create([
            'title' => 'masks'
        ]);
        \App\Category::create([
            'title' => 'soap'
        ]);
        \App\Category::create([
            'title' => 'spices'
        ]);
    }
}
