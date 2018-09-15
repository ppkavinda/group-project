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
            'post_image' => 'asoap.jpg',
        ]);
        \App\Post::create([
            'title' => 'creating shoe introduction',
            'course_id' => 2,
            'body' => 'Sed quis eleifend leo. Phasellus iaculis, metus facilisis gravida dapibus, ligula dolor placerat dolor, eget cursus neque risus quis tortor varius augue ut mauris condimentum dictum.',
            'user_id' => 1,
            'post_image' => '4.jpg',
        ]);
      
        \App\Post::create([
            'title' => 'Chilli Sauce Manufacturing ',
            'course_id' => 3,
            'body' => '
            <h3>Ingredients</h3>:
            Chilli 100<br>
            400 tomatoes<br>
            Pepper 2 tablespoons tables<br>
            100 onions<br>
            White toddy<br>
            A piece of ginger<br>
            Stock Water bottles 01<br>
            Vinegar 1/2 bottles<br>
            Sugar little<br>
            4 tablespoons of margarine tables<br>
            Plum teaspoons 02',
            'user_id' => 1,
            'post_image' => '4.jpg',
        ]);
        

         
    }
}
