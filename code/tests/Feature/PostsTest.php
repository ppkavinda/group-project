<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostsTest extends TestCase
{
    use RefreshDatabase;

    public function setUp () {
        Parent::setUp();

        $this->post = factory('App\Post')->create();
    }

    public function test_enrolled_user_can_view_a_post()
    {
        $this->be(factory('App\User')->create());
        $this->get("/enroll/{$this->post->course->id}");

        $this->get($this->post->path())
            ->assertSee($this->post->title);
    }

    
    public function test_unenrolled_users_cannot_view_a_post ()
    {
        $this->be(factory('App\User')->create());

        $this->get($this->post->path())
            ->assertDontSee($this->post->title);
    }


    public function test_enrolled_user_can_see_comments_associated_with_a_post () 
    {
        $this->be(factory('App\User')->create());
        $this->get("/enroll/{$this->post->course->id}");

        $comment = factory('App\Comment')->create(['post_id' => $this->post->id]);

        $this->get($this->post->path())
            ->assertSee($comment->body);
    }


    public function test_authorized_user_cannot_create_a_post () 
    {
        $this->be(factory('App\User')->create());

        $post = factory('App\Post')->make();

        $this->post('/posts', $post->toArray())
            ->assertStatus(401);
    }


    public function test_authorized_user_can_create_a_post () 
    {
        $this->be(factory('App\User')->create(['role' => 2]));

        $post = factory('App\Post')->make();

        $this->post('/posts', $post->toArray())
            ->assertstatus(201);
    }
}
