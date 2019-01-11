<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostCoverTest extends TestCase
{
    use RefreshDatabase;

    public function setUp ()
    {
        Parent::setUp();

        $this->post = factory('App\Post')->create();
    }
    public function only_authorized_users_can_upload_cover_image ()
    {
        $this->json('POST', '/posts/' . $this->post->id . '/cover')
            ->assertStatus(401);
    }

    public function test_a_valid_cover_image_should_be_provided ()
    {
        $this->be(factory('App\User')->create(['role' => 2]));
        $this->post->user_id = auth()->id();

        $this->json('POST', '/posts/' . $this->post->id . '/cover', [
            'cover' => 'not-an-image',
            ])->assertStatus(422);
    }

    public function test_authorized_user_may_upload_cover_image_to_a_post ()
    {
        $this->be(factory('App\User')->create(['role' => 2]));
        $this->post->user_id = auth()->id();
 
        Storage::fake('public');

        $this->json('POST', '/posts/' . $this->post->id . '/cover', [
            'cover' => $file = UploadedFile::fake()->image('covers.jpg'),
            ]);
        
        $this->assertEquals('/storage/img/posts/covers/' . $file->hashName(), $this->post->all()[0]->cover_img);
        Storage::disk('public')->assertExists('img/posts/covers/' . $file->hashName());
    }
    
}
