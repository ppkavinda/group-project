<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_authorized_user_can_add_products_to_the_store ()
    {
        // $this->withoutExceptionHandling();
        $this->be(factory('App\User')->create());

        $product = factory('App\Product')->create(['user_id', auth()->id()]);

        $responser = $this->post('/products', $product)
            ->assertStatus(201);
    }
}
