<?php

namespace Tests\Feature;

use App\Constants\Roles;
use Tests\TestCase;
use App\Models\User;
use App\Models\UserRoles;
use Illuminate\Support\Facades\Hash;

class ViewTest extends TestCase
{

    public function test_index()
    {
        $response = $this->get('/signin');
        $response->assertStatus(200);
    }

    public function test_page404()
    {
        $response = $this->get('/signup');
        $response->assertStatus(200);
    }

     public function test_indexforoperator()
    {      
        $response = $this->call('GET', '/');
        $response->assertViewIs('index');
       // $response->assertSee('Перейти в чат');
    }
}
