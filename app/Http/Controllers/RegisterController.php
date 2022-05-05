<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
use App\Models\JobSeeker;
use App\Models\Application;
use App\Models\Address;
use App\Models\Education;
use App\Models\skills;
use App\Models\Reference;

class RegisterController extends Controller
{
    
    //Return company Reg Form
    public function showCompanyRegistrationForm(){
        return view ('users/company');
    }

    //Return Jobseeker Reg Form
    public function showJobSeekerRegistrationForm(){
        
        $skills = Skills::all();

        return view ('users/jobseeker')->with('skills', $skills);
    }

    //Create company account insert into all associated tables
    public function registerCompanyAccount(Request $request){
        
        $request->validate([
            'company_name' => 'required',
            'founded' => 'required',
            'staff_capacity' => 'required',
            'email' => 'required',
            'password' => 'required',
            'street_name' => 'required',
            'house_number'=> 'required',
            'postcode' => 'required',
            'city' => 'required',
            'county' => 'required',
        ]);

        $user = new User;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = 2;
        $user->save();
        
        $company = new Company;
        $company->company_name = $request->company_name;
        $company->founded = $request->founded;
        $company->staff_capacity = $request->staff_capacity;
        $user->company()->save($company);

        $address = new Address;
        $address->street_name = $request->street_name;
        $address->house_number = $request->house_number;
        $address->postcode = $request->postcode;
        $address->city = $request->city;
        $address->county = $request->county;
        $company->address()->save($address);

        return redirect('/');
        
    }

    //Create Jobseeker account insert into all associated tables
    public function registerJobSeekerAccount(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'contact_number' => 'required',
            'email' => 'required',
            'password' => 'required',
            'career_type' => 'required',
            'biography' => 'required',
            'years_of_experience' => 'required',
            'hobby_description' => 'required',
            'street_name' => 'required',
            'house_number'=> 'required',
            'postcode' => 'required',
            'city' => 'required',
            'place_of_institution' => 'required',
            'education_type' => 'required',
            'course_name' => 'required',
            'results' => 'required',
            'skill_name' => 'required',
            'previous_company_name' => 'required',
            'employer_name' => 'required',
            'employer_contact' => 'required',
            'duration_worked' => 'required',
        ]);

        $user = new User;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = 1;
        $user->save();

        $jobSeeker = new JobSeeker;
        $jobSeeker->first_name = $request->first_name;
        $jobSeeker->last_name = $request->last_name;
        $jobSeeker->contact_number = $request->contact_number;
        $user->jobseeker()->save($jobSeeker);

        $address = new Address;
        $address->street_name = $request->street_name;
        $address->house_number = $request->house_number;
        $address->postcode = $request->postcode;
        $address->city = $request->city;
        $address->county = $request->county;
        $jobSeeker->address()->save($address);

        $application = new Application;
        $application->career_type = $request->career_type;
        $application->biography = $request->biography;
        $application->years_of_experience = $request->years_of_experience;
        $application->hobby_description = $request->hobby_description;
        $jobSeeker->application()->save($application);
        
        $education = new Education;
        $education->place_of_institution = $request->place_of_institution;
        $education->education_type = $request->education_type;
        $education->course_name = $request->course_name;
        $education->results = $request->results;
        $application->education()->save($education);

        $data = $request->input('skill_name');
        
        $skills = Skills::select('skills.id')
        ->where('skills.skill_name', $data)->get();
        
        $application->skills()->attach($skills); 

        $references = new Reference;
        $references->previous_company_name = $request->previous_company_name;
        $references->employer_name = $request->employer_name;
        $references->employer_contact = $request->employer_contact;
        $references->duration_worked = $request->duration_worked;
        $application->reference()->save($references);

        return redirect('/');

    }
}
