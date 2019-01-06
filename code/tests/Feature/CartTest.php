<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CartTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_unauthorized_user_cannot_add_items_to_cart()
    {
        $product = factory('App\Product')->create();

        $this->post("/cart/$product->id", ['quantity' => 2])
            ->assertStatus(302);
    }

    // public function test_authorized_user_can_add_items_to_cart()
    // {
    //     $this->withoutExceptionHandling();
        
    //     $product = factory('App\Product')->create();

    //     $this->be(factory('App\User')->create());

    //     $this->post("/cart/$product->id", ['quantity' => 2])
    //         ->assertStatus(200);
    // }

    // public function test_authenticate_user_can_remove_item_from_cart()
    // {
    //     $this->withoutExceptionHandling();
    //     $product = factory('App\Product')->create(['amount' => 20]);

    //     $this->be(factory('App\User')->create());

    //     $cartItem = $this->post("/cart/$product->id", ['quantity' => 2]);

    //     $a = $this->delete("/cart/" . $cartItem->json()['rowId'])
    //         ->assertStatus(302);
    // }
}
