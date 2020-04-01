<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class CommentTest extends TestCase
{
    use DatabaseMigrations;

    protected function setUp(): void
    {
        parent::setup();
    }
    
    /** @test */
    public function a_comment_has_a_user()
    {
        $comment = factory("App\Comment")->create();
        $this->assertInstanceOf("App\User", $comment->user);
    }
    
    /** @test */
    public function a_comment_has_a_post()
    {
        $comment = factory("App\Comment")->create();
        $this->assertInstanceOf("App\Post", $comment->post);
    }
    
}
