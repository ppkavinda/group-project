<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Post::create([
            'title' => 'creating soap intro',
            'course_id' => 1,
            'body' => 'Sed quis eleifend leo. Phasellus iaculis, metus facilisis gravida dapibus, ligula dolor placerat dolor, eget cursus neque risus quis tortor varius augue ut mauris condimentum dictum.',
            'user_id' => 1,
            'post_image' => '1.jpg',
        ]);
        \App\Post::create([
            'title' => 'creating shoe introduction',
            'course_id' => 2,
            'body' => 'Sed quis eleifend leo. Phasellus iaculis, metus facilisis gravida dapibus, ligula dolor placerat dolor, eget cursus neque risus quis tortor varius augue ut mauris condimentum dictum.',
            'user_id' => 1,
            'post_image' => '4.jpg',
        ]);
    }
}
