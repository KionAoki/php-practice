<?php

namespace Tests\Feature\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class UserInfoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use DatabaseMigrations;
    use RefreshDatabase;

    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function getAPITest()
    {
        // 傳送參數
        $response = $this->call('GET', '/api/user');

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function getUserIdAPITest()
    {
        // 傳送參數
        $response = $this->call('GET', '/api/user/1');

        $this->assertEquals(200, $response->getStatusCode());
    }
}
