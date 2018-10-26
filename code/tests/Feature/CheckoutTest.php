<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CheckoutTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_checkout_details_form_can_be_submited_successfully()
    {
        $this->be(factory('App\User')->create());
        $product = factory('App\Product')->create();
        $cart = \Cart::add(
            $product->id, $product->name, 2, $product->price, 
            ['img1' => $product->img1, 'img2' => $product->img2, 'img3' => $product->img3]
        );
// dd(auth()->user());
        $response = $this->json('POST', 'checkout/details', [
            'address1' => "asdf asdfasd asdf asdfj",
            'address2' =>  'asdfsdfasdflfjaslj asldkfj ',
            'city' => 'matara',
            'postal_code' => '23423',
            'telephone' => '0123456789',
            // 'api_token': "YkUTj0FmO7t5CBdQbsllYJVZle9cTJyMy5x7Pxpdott5Hrcbd7I5aYDg0Hnj",
            // 'created_at' => null,
            // 'description' => null,
            // 'email' => "admin@admin.com",
            // 'email_verified_at' => null,
            // 'id' => 1,
            // 'name' => "admin",
            // 'nic' => "123456789V",
            // 'profile_pic' => "/storage//img//avaters//avatar5.png",
            // 'role' => 1,
            // 'updated_at' => null,
        ]);

        $response->assertStatus(200);
    }
}
