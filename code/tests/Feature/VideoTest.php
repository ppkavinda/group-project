<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VideoTest extends TestCase
{
    use RefreshDatabase;

    public function test_unauthorized_user_cannot_view_video_upload_form()
    {
        $this->get('/videos/upload')
            ->assertStatus(302);

        $this->be(factory('App\User')->create());
        $this->get('/videos/upload')
            ->assertStatus(401);
    }

    public function test_authorized_user_can_view_video_upload_form()
    {
        $this->be(factory('App\User')->create(['role' => 2]));
        $this->get('/videos/upload')
            ->assertStatus(200)
            ->assertSee("Upload a <span>Video</span>");
    }

    public function test_unauthorized_user_may_not_upload_a_video()
    {
        // $this->withoutExceptionHandling();
        $this->post('/videos/upload')
            ->assertStatus(302);

        $this->be(factory('App\User')->create());
        $this->json('POST', '/videos/upload')
            ->assertStatus(401);
    }

    public function test_valid_video_must_be_provided()
    {
        $this->be(factory('App\User')->create(['role' => 2]));
        $this->json('POST', '/videos/upload', ['video_path' => 'not-a-video'])
            ->assertStatus(422);
    }

    // public function test_authorized_user_may_upload_a_video()
    // {
    //     // $this->withoutExceptionHandling();

    //     $this->be(factory('App\User')->create(['role' => 2]));

    //     Storage::fake('public');

    //     $this->json('POST', '/videos/upload', [
    //         'video' => UploadedFile::fake()->create('tutorial.avi'),
    //         'course_id' => factory('App\Course')->create()->id,
    //         'title' => 'test title',
    //         ])
    //         ->assertStatus(201);
    // }
}
