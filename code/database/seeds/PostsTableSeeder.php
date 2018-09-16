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
            'title' => '<b><strong>Chilli Sauce Manufacturing</strong> <b>',
            'course_id' => 3,
            'body' => '<h3><u>Ingredients</u></h3><br>
            <ul><li>Chilli 100g</li>
            <li>400g tomatoes</li>
            <li>Pepper 2 tablespoons tables</li>
            <li>100g onions</li>
            <li>White toddy</li>
            <li>A piece of ginger</li>
            <li>Stock Water bottles 01</li>
            <li>Vinegar 1/2 bottles</li>
            <li>Sugar little</li>
            <li>4 tablespoons of margarine tables</li>
            <li>Plum teaspoons 02</li></ul><br>
            

<h3><b>How to prepare</b></h3>
<ol><li>When it is first put on the jar and put the margarine on the sauce, then the red onion is dried up until the color of the wilted rhizomes is dyed until the color of the tomatoes is added
.</li>
<li>Add chilli powder to 10 pepper and flour and mix it with water and vinegar.</li>
<li>After it is well-steamed, add the sugar pepper powder and salt to taste.</li>
</ol>',
            'user_id' => 1,
            'post_image' => '/dist/img/post/post3_1.jpg',
        ]);
        

         
    }
}
