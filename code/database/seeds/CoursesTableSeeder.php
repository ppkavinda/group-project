<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Course::create([
            'category_id' => 1,
            'title' => 'soap',
            'subtitle' => 'How to Make Soap',
            'cover_img' => '2.jpg',
            'description' => 'Sed quis eleifend leo. Phasellus iaculis, metus facilisis gravida dapibus, ligula dolor placerat dolor, eget cursus neque risus quis tortor varius augue ut mauris condimentum dictum.
            Sed quis eleifend leo. Phasellus iaculis, metus facilisis gravida dapibus, ligula dolor placerat dolor, eget cursus neque risus quis tortor varius augue ut mauris condimentum dictum.',
        ]);

        \App\Course::create([
            'category_id' => 2,
            'title' => 'shoes',
            'subtitle' => 'How to Make Shoes',
            'cover_img' => '3.jpg',
            'description' => 'Sed quis eleifend leo. Phasellus iaculis, metus facilisis gravida dapibus, ligula dolor placerat dolor, eget cursus neque risus quis tortor varius augue ut mauris condimentum dictum.

Sed quis eleifend leo. Phasellus iaculis, metus facilisis gravida dapibus, ligula dolor placerat dolor, eget cursus neque risus quis tortor varius augue ut mauris condimentum dictum.'
        ]);

        \App\Course::create([
            'category_id' => 3,
            'title' => 'Chilli Sauce ',
            'subtitle' => 'How to Make Chilli Sauce Manufacturing',
            'cover_img' => 'chillipaste.png',
            'description' => 'Sed quis eleifend leo. Phasellus iaculis, metus facilisis gravida dapibus, ligula dolor placerat dolor, eget cursus neque risus quis tortor varius augue ut mauris condimentum dictum.

Sed quis eleifend leo. Phasellus iaculis, metus facilisis gravida dapibus, ligula dolor placerat dolor, eget cursus neque risus quis tortor varius augue ut mauris condimentum dictum.'
        ]);
    }
}
