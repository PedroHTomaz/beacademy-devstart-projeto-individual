<?php

namespace Tests\Feature;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DeleteUserTest extends TestCase
{
    public function test_delete_user()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->delete('/usuarios/'.$user->id);

        $response = $this->get('/usuarios/'.$user->id);

        $response->assertStatus(404);
    }
}
