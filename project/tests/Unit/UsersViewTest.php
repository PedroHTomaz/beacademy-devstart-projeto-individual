<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersViewTest extends TestCase
{
    public function test_view_users_list_screen_can_be_rendered()
    {
        $response = $this->get('/usuarios');

        $response->assertStatus(200);
    }
}
