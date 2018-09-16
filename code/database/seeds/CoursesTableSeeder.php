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
            'title' => 'SOAP Indrustry',
            'subtitle' => 'Making Soap ,Starting EntreprenerShip ',
            'cover_img' => 'asoap.jpg',
            'description' => 'Making soap for the first time may be intimidating, but is not difficult.
             This quick and easy beginner soap recipe comes with fun ideas for personalizing it by adding exfoliants, essential oils, etc.

            ',
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
            'subtitle' => 'Chilli Sauce Manufacturing and distributing',
            'cover_img' => 'chillipaste.png',
            'description' => 'Chilli paste is declious food.It can prepare Easier.Now We lok Step by Step How We Prepare it'
        ]);

        \App\Course::create([
            'category_id' => 4,
            'title' => 'Manufacture of candles ',
            'subtitle' => 'Candles Manufacturing Introduction ',
            'cover_img' => 'candle.jpg',
            'description' => 'A candle is an ignitable wick embedded in wax, or another flammable solid substance such as tallow, that provides light, and in some cases, a fragrance.
            Now We will see   step by step about candles Manufacturing',
            ]);
    }
}
