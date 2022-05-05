<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegsiterUserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */
    public function displayJobSeekerRegistrationPage()
    {
        $response = $this->visit('/jobseeker-registration')
        ->seePageIs('/jobseeker-registration');
    }

   
    public function testJobSeekerRegistrationForm()
    {
        $response = $this->visit('/jobseeker-registration')
            ->type('test', 'first_name')
            ->type('jobseeker', 'last_name')
            ->type('01724123456', 'contact_number')
            ->type('test1jobseeker@outlook.com', 'email')
            ->type('password', 'password')
            ->type('test street', 'street_name')
            ->type('56', 'house_number')
            ->type('HD1 3DG', 'postcode')
            ->type('Huddersfield', 'city')
            ->type('West Yorkshire', 'county')
            ->type('Full Stack Web Development', 'career_type')
            ->type('This is a test account, nothing more.', 'biography')
            ->type('3', 'years_of_experience')
            ->type('Testing is what I enjoy the most', 'hobby_description')
            ->select('Laravel', 'skill_name')
            ->type('University of Huddersfield', 'place_of_institution')
            ->select('Bachelor Degree', 'education_type')
            ->type('BSC Computing', 'course_name')
            ->type('71%', 'results')
            ->type('Xune Solutions', 'previous_company_name')
            ->type('Anna', 'employer_name')
            ->type('anna@xune.solutions', 'employer_contact')
            ->type('1', 'duration_worked')
            ->press('Register')
            ->seePageIs('/');
    }

    /** @test */
    public function displayCompanyRegistrationPage()
    {
        $response = $this->visit('/company-registration')
        ->seePageIs('/company-registration');
    }

    public function testCompanyRegistrationForm()
    {
        $response = $this->visit('/company-registration')
            
            ->type('test1company@outlook.com', 'email')
            ->type('password', 'password')
            ->type('Test Company', 'company_name')
            ->type('2022', 'founded')
            ->type('1', 'staff_capacity')
            ->type('test street company', 'street_name')
            ->type('3', 'house_number')
            ->type('HD1 3DG', 'postcode')
            ->type('Huddersfield', 'city')
            ->type('West Yorkshire', 'county')
            ->press('Register')
            ->seePageIs('/');
    }






}
