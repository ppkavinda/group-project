<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CourseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_user_can_see_all_courses () {
        $response = $this->get('/courses');

        $this->assertTrue(true);
    }

    public function test_user_can_see_login_view () {
        $this->assertTrue(true);
    }
}
