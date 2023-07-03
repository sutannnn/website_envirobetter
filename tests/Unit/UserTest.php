<?php

namespace Tests\Unit;

use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function text_web()
    {
        $response = $this->get('/donasiUang');
        $response->assertStatus(200);
    }

    public function text_web2()
    {
        $response = $this->get('/home');
        $response->assertStatus(200);
    }

    public function text_register()
    {
        $response = $this->post('/register', [
            'name' => 'Test',
            'email' => 'test@gmail.com',
            'password' => 'test123',
            'password_confirm' => 'test123'
        ]);

        $response->assertRedirect('/home');
    }
}
