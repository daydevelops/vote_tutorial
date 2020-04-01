<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    protected function setUp(): void
    {
        parent::setup();
    }
    
    /** @test */
    public function a_user_has_posts()
    {
        $user = factory("App\User")->create();
        $post = factory("App\Post")->create(['user_id'=>$user->id]);
        $this->assertInstanceOf("App\Post", $user->fresh()->posts[0]);
    }
    
    /** @test */
    public function a_user_has_comments()
    {
        $user = factory("App\User")->create();
        $post = factory("App\Comment")->create(['user_id'=>$user->id]);
        $this->assertInstanceOf("App\Comment", $user->fresh()->comments[0]);
    }
    
}
