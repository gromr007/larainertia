<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersTest extends TestCase
{

    public function test_index()
    {
        $response = $this->get('/users');

        $response->assertStatus(200);
    }
    public function test_show()
    {
        $response = $this->get('/users/1');

        $response->assertOk();

        $response->assertJsonPath('', []);


    }
}
