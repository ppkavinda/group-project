<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CoursesTest extends TestCase
{
    use RefreshDatabase;
    /**
     *
     * test courses
     */
    public function setUp () 
    {
        parent::setUp();

        $this->course = factory('App\Course')->create();
    }

    public function test_user_can_view () 
    {
        $this->get('/courses')
            ->assertSee($this->course->title);
    }

    public function test_user_can_view_single_course () 
    {
        $this->get($this->course->path())
            ->assertSee($this->course->description);
    }

    public function test_guest_user_cannot_see_posts_which_belongs_a_course () 
    {
        $post = factory('App\Post')->create(['course_id' => $this->course->id]);

        $this->get($post->course->path())
            ->assertDontSee($post->title);
    }

    public function test_auth_user_can_see_posts_which_belongs_to_a_course () 
    {
        $this->be(factory('App\User')->create());

        $post = factory('App\Post')->create(['course_id' => $this->course->id]);

        $this->get($post->course->path())
            ->assertDontSee($post->title);

    }
}
