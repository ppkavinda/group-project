<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReviewsTest extends TestCase
{
    use RefreshDatabase;

    public function test_unauthorized_user_cannot_add_review_to_a_product()
    {
        $product = factory('App\Product')->create();
        $review = factory('App\Review')->create(['product_id' => $product->id]);

        $response = $this->post("/reviews/$product->id/create", $review->toArray());
        $response->assertStatus(302);

        // $user = $this->be(factory('App\User')->create());
        // $response = $this->post('/reviews/create', $review->toArray());
        // $response->assertStatus(403);
    }

    // public function test_authorized_user_can_add_review_to_a_product() {
    //     // $this->withoutExceptionHandling();
    //     $user = $this->be(factory('App\User')->create());

    //     $product = factory('App\Product')->create();
    //     $review = factory('App\Review')->create(['product_id' => $product->id]);

    //     $response = $this->post("/reviews/$product->id/create", $review->toArray());

    //     $this->get("products/$product->id")->assertSee($review->body);
    //     $this->assertDatabaseHas('reviews', $review->toArray());
    //  }
}
