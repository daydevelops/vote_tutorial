<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class PostTest extends TestCase
{
    use DatabaseMigrations;

    protected function setUp(): void
    {
        parent::setup();
    }
    
    /** @test */
    public function a_post_has_a_user()
    {
        $post = factory("App\Post")->create();
        $this->assertInstanceOf("App\User", $post->user);
    }
    
    /** @test */
    public function a_post_has_comments()
    {
        $post = factory("App\Post")->create();
        $comment = factory("App\Comment")->create(['post_id'=>$post->id]);
        $this->assertInstanceOf("App\Comment", $post->fresh()->comments[0]);
    }
    
}
