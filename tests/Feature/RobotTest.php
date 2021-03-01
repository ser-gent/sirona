<?php

namespace Tests\Feature;

use App\Models\Robot;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RobotTest extends TestCase
{
    public function test_robot_index()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/robot');
        $response->assertStatus(200);
    }

    public function test_guest_user_cannot_get_index_page()
    {
        $response = $this->get('/robot');
        $response->assertStatus(302);
    }

}
