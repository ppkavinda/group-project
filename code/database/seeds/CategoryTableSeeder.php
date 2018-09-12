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
            'title' => 'ditergent'
        ]);
        \App\Category::create([
            'title' => 'jewellary'
        ]);
        \App\Category::create([
            'title' => 'clothes'
        ]);
    }
}
