<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use App\Models\User;
use App\Models\Company;
use App\Models\JobPost;

class JobPostTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */
    
    public function displayCreateJobPost()
    {
        $user = User::create([
			"email" => 'testcompany1@gmail.com',
			"password" => 'password',
            "role" => 2,
        
        ]);

        $company = Company::create([
            "company_name" => 'Testto',
            "founded" => '2019',
            "staff_capacity" => 2,
            "user_id" => 1,
		]);

        $this->actingAs($user)->get('/posts/create')
            ->seePageIs('/posts/create');
    }
}
