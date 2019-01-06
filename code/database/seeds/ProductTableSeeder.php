<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Product')->create(['category_id' => 1]);
        DB::table('cloths')->insert([
            'id' => 1,
            'product_id' => 1,
            'size(XS)' => 5,
            'size(S)' => 4,
            'size(M)' => 5
        ]);

        factory('App\Product')->create(['category_id' => 2]);
        DB::table('masks')->insert([
            'id' => 2,
            'product_id' => 2,
            'size(25*25)' => 3,
            'size(50*50)' => 5,
            'size(60*60)' => 5
        ]);

        factory('App\Product')->create(['category_id' => 3]);
        DB::table('soaps')->insert([
            'id' => 3,
            'product_id' => 3,
            'size(50g)' => 3,
            'size(100g)' => 35,
            'size(200g)' => 3,
        ]);

        factory('App\Product')->create(['category_id' => 4]);
        DB::table('shoes')->insert([
            'id' => 4,
            'product_id' => 4,
            'size(6)' => 6,
            'size(7)' => 6,
            'size(8)' => 9,
            'size(9)' => 10
        ]);

        factory('App\Product')->create(['category_id' => 1]);
        DB::table('cloths')->insert([
            'id' => 5,
            'product_id' => 5,
            'size(XS)' => 5,
            'size(S)' => 4,
            'size(M)' => 5
        ]);

        factory('App\Product')->create(['category_id' => 2]);
        DB::table('masks')->insert([
            'id' => 6,
            'product_id' => 6,
            'size(25*25)' => 3,
            'size(50*50)' => 5,
            'size(60*60)' => 5
        ]);

        factory('App\Product')->create(['category_id' => 3]);
        DB::table('soaps')->insert([
            'id' => 7,
            'product_id' => 7,
            'size(50g)' => 3,
            'size(100g)' => 35,
            'size(200g)' => 3,
        ]);

        factory('App\Product')->create(['category_id' => 4]);
        DB::table('shoes')->insert([
            'id' => 8,
            'product_id' => 8,
            'size(6)' => 6,
            'size(7)' => 6,
            'size(8)' => 9,
            'size(9)' => 10
        ]);


        factory('App\Product', 20)->create();
    }
}
