<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\JobSeeker;
use App\Models\Address;
use App\Models\Application;
use App\Models\Education;
use App\Models\Reference;
use App\Models\Skills;
use DB;

class UserApplicationController extends Controller
{
    public function index(){

        $user_id = Auth::id();
        //in job seekers table, first connect to other table 'users' then join on the common value.
        //e.g matching id's so in jobseekers table you have user_id which references id in users table.

        $user = User::select('users.email')
        ->where('id', $user_id)->first();
    
        $jobSeeker = JobSeeker::select('jobseeker.*')
        ->join('users', 'users.id', '=', 'jobseeker.user_id')
        ->where('users.id', $user_id)->first();
        
        
        $application = Application::select('application.*')
            ->join('jobseeker', 'jobseeker.id', '=', 'application.job_seeker_id')
            ->join('users', 'users.id', '=', 'jobseeker.user_id')
            ->where('users.id', $user_id)->first();
    
        
        $address = Address::select('address.*')
            ->join('jobseeker', 'jobseeker.id', '=', 'address.job_seeker_id')
            ->join('users', 'users.id', '=', 'jobseeker.user_id')
            ->where('users.id', $user_id)->first();
        
        $education = Education::select('education.*')
            ->join('application', 'application.id', '=', 'education.application_id')
            ->join('jobseeker', 'jobseeker.id', '=', 'application.job_seeker_id')
            ->join('users', 'users.id', '=', 'jobseeker.user_id')
            ->where('users.id', $user_id)->get();
        
        $skills = Skills::select('skills.*')
            ->join('application_skills', 'skills.id', '=', 'application_skills.skills_id')
            ->join('application', 'application.id', '=', 'application_skills.application_id')
            ->join('jobseeker', 'jobseeker.id', '=', 'application.job_seeker_id')
            ->join('users', 'users.id', '=', 'jobseeker.user_id')
            ->where('users.id', $user_id)->get();
        
        $references = Reference::select('references.*')
            ->join('application', 'application.id', '=', 'references.application_id')
            ->join('jobseeker', 'jobseeker.id', '=', 'application.job_seeker_id')
            ->join('users', 'users.id', '=', 'jobseeker.user_id')
            ->where('users.id', $user_id)->get();


        return view('application/index')->with('application', $application)->with('address', $address)->with('education', $education)->with('references', $references)->with('jobSeeker', $jobSeeker)->with('skills', $skills)->with('user', $user);

    }

    public function edit($id){
        $jobSeeker = JobSeeker::find($id);
        $address = Address::find($id);
        $application = Application::find($id);
        $education = Education::findOrFail($id);
        $skills = Skills::find($id);
        $reference = Reference::find($id);

        return view('application.edit')->with('jobSeeker', $jobSeeker)->with('application', $application)->with('address', $address)->with('education', $education)->with('skills', $skills)->with('references', $reference);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'contact_number' => 'required',
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
            'skill_type' => 'required',
            'previous_company_name' => 'required',
            'employer_name' => 'required',
            'employer_contact' => 'required',
            'duration_worked' => 'required',
        ]);

        $jobSeeker = JobSeeker::where('id',$id)->first();
        $application = Application::where('id',$id)->first();
        $address = Address::where('id',$id)->first();
        $education = Education::where('id',$id)->first();
        $skills = Skills::where('id',$id)->first();
        $references = Reference::where('id',$id)->first();
       

        //Saves Job post changes
        $jobSeeker->first_name = $request->input('first_name');
        $jobSeeker->last_name = $request->input('last_name');
        $jobSeeker->contact_number = $request->input('contact_number');
        $jobSeeker->save();

        $application->career_type = $request->input('career_type');
        $application->biography = $request->input('biography');
        $application->years_of_experience = $request->input('years_of_experience');
        $application->hobby_description = $request->input('hobby_description');
        $application->save();

        $address->street_name = $request->input('street_name');
        $address->house_number = $request->input('house_number');
        $address->postcode = $request->input('postcode');
        $address->city = $request->input('city');
        $address->save();
       
        $education->place_of_institution = $request->input('place_of_institution');
        $education->education_type = $request->input('education_type');
        $education->course_name = $request->input('course_name');
        $education->results = $request->input('results');
        $education->save();

        $skills->skill_name = $request->input('skill_name');
        $skills->skill_type = $request->input('skill_type');
        $skills->save();

        $references->previous_company_name = $request->input('previous_company_name');
        $references->employer_name = $request->input('employer_name');
        $references->employer_contact = $request->input('employer_contact');
        $references->duration_worked = $request->input('duration_worked');
        $references->save();

        return redirect()->route('application.index')->with('success', 'Application updated Successfully.');
    }
}
