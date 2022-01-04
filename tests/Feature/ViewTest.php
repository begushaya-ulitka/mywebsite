<?php

namespace Tests\Feature;

use Tests\TestCase;

class ViewTest extends TestCase
{
    public function test_index()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_signin()
    {
        $response = $this->get('/signin');
        $response->assertStatus(200);
    }

    public function test_signup()
    {
        $response = $this->get('/signup');
        $response->assertStatus(200);
    }

    public function test_admin_form()
    {
        $response = $this->get('/admin-form');
        $response->assertStatus(200);
    }

    public function test_chat()
    {
        $response = $this->get('/chat');
        $response->assertStatus(200);
    }
}
