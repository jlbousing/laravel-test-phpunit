<?php

namespace Tests\Feature\Models;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{

    use RefreshDatabase;

    public function test_user()
    {

        //PROCESO

        User::factory()->create([
            "email" => "jbousing@gmail.com"
        ]);

        $response = $this->get('/');

        $this->assertDatabaseHas("users",[
            "email" => "jbousing@gmail.com"
        ]);

        $this->assertDatabaseMissing("users",[
            "email" => "no@existe.com"
        ]);
    }
}
