<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommentsTest extends TestCase
{
    use RefreshDatabase;

    public function setUp()
    {
        Parent::setUp();

        $this->post = factory('App\Post')->create();
    }

    public function test_auth_user_can_reply_to_comments ()
    {
        $this->be(factory('App\User')->create());

        $comment = factory('App\Comment')->make(['post_id' => $this->post->id]);

        $this->post("/comments/{$this->post->id}", $comment->toArray())
            ->assertStatus(201);
    }


    public function test_guest_user_cannot_reply_to_comments ()
    {
        $comment = factory('App\Comment')->make(['post_id' => $this->post->id]);

        $this->post("/comments/{$this->post->id}", $comment->toArray())
            ->assertRedirect('/login');
    }


    public function test_authorized_user_can_delete_comments ()
    {
        $this->be(factory('App\User')->create());

        $comment = factory('App\Comment')->create(['user_id' => auth()->id()]);

        $this->json('DELETE', "/comments/{$comment->id}")
            ->assertStatus(204);

        $this->assertDatabaseMissing('comments', $comment->toArray());
    }


    public function test_unauthorized_user_may_not_delete_comments ()
    {
        
        $comment = factory('App\Comment')->create();
        
        $this->delete("/comments/{$comment->id}")
            ->assertRedirect('/login');
        $this->assertDatabaseHas('comments', $comment->toArray());
        
        $this->be(factory('App\User')->create());
        $this->json('DELETE', "/comments/{$comment->id}")
            ->assertStatus(403);
        $this->assertDatabaseHas('comments', $comment->toArray());

    }
}
