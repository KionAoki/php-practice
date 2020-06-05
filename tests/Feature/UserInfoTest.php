<?php

namespace Tests\Feature\Feature;

use App\UserInfo;
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

    public function test()
    {
        // Return View
        $response = $this->get('/');

        $response->assertStatus(200);

        // Get
        $response = $this->call('GET', '/api/user');

        $this->assertEquals(200, $response->getStatusCode());

        // Get userId = 1
        $response = $this->call('GET', '/api/user/1');

        $this->assertEquals(200, $response->getStatusCode());

       // Post

        $payload = factory(UserInfo::class)->make()->toArray();

        $response = $this->call('POST', '/api/user', $payload);

        $this ->assertEquals(201, $response->getStatusCode());

        // Put
        $user = $this->call('GET', '/api/user/1');

        $payloadPut = [
            'userId' => $user['userId'],
            'userName' => 'Sally',
            'account' => $user['account'],
            'pw' => $user['pw'],
            'email' => $user['email'],
        ];

        $response = $this->call('PUT', '/api/user/1', $payloadPut);

        $this ->assertEquals(200, $response->getStatusCode());

        // Delete

        $response = $this->call('DELETE', '/api/user/1');

        $this ->assertEquals(204, $response->getStatusCode());
    }
}
