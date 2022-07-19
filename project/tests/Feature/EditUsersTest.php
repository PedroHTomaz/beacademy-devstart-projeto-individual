<?php

namespace Tests\Feature;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EditUsersTest extends TestCase
{
    public function test_users_can_be_edited()
    {
        $user = User::factory()->create();
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->actingAs($user);

        $response = $this->put('/usuarios/'.$user->id, [
            'name' => 'User Editado',
            'about' => 'editei',
            'email' => $user->email,
            'password' => '00112233',
            'education' => 'Médio Completo',
            'city' => 'Fortaleza',
        ]);

        $response = $this->get('/usuarios');

        $response->assertStatus(200);
    }
}
