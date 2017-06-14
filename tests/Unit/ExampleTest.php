<?php

namespace Tests\Unit;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
	use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $first=$factory(Post::class)->create();
        $second=$factory(Post::class)->create([
        	'created_at' => \Carbon\Carbon::now()->subMonth()
        ]);
        Post::archives();

        $this->assertE(2, $posts);
    }
}
