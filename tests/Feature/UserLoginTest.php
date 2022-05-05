<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserLoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    
    /** @test */
    public function displayLoginPage()
    {
        $response = $this->visit('/')
            ->seePageIs('/');
    }

    public function testLoginJobSeeker()
    {
        $response = $this->visit('/')
            ->type('test1jobseeker@outlook.com', 'email')
            ->type('password', 'password')
            ->press('Login')
            ->seePageIs('/applications');
    }

    public function testLoginCompany()
    {
        $response = $this->visit('/')
            ->type('test1company@outlook.com', 'email')
            ->type('password', 'password')
            ->press('Login')
            ->seePageIs('/posts');
    }
}
