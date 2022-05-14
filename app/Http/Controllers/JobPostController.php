<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\JobPost;
use App\Models\Company;
use App\Models\Address;
use App\Models\Skills;
use App\Models\Benefits;
use Session;

class JobPostController extends Controller
{

    public function index() {
        
        $user_id = Auth::id();

        $user = User::select('users.*')->where('users.id',$user_id)->first();
       
        $jobPosts = Company::join('users', 'users.id', '=', 'company.user_id')
            ->join('jobpost', 'jobpost.company_id', '=', 'company.id')
            ->where('users.id', $user_id)->orderBy('jobpost.created_at', 'DESC')->paginate(3);

        $skills = Skills::join('job_post_skills', 'skills.id', '=', 'job_post_skills.skills_id')
            ->join('jobpost', 'jobpost.id', '=', 'job_post_skills.job_post_id')
            ->join('company', 'company.id', '=', 'jobpost.company_id')
            ->join('users', 'users.id', '=', 'company.user_id')
            ->where('users.id', $user_id)->get();

        $address = Address::join('company', 'company.id', '=', 'address.company_id')
            ->join('users', 'users.id', '=', 'company.user_id')
            ->where('users.id', $user_id)->first();
        

        //Returns view with collection items
        return view('posts/index')->with('jobPosts', $jobPosts)->with('address', $address)->with('skills', $skills)->with('user', $user);
    }

    public function create() {
    
        $skills = Skills::all();
        return view('posts/create')->with('skills', $skills);
        //return view('posts/create', ['skills'=>$skills]);

    }

    public function store(Request $request) {

        //Gets the user id
        $user_id = Auth::id();
        //Finds the company id of the authenticated user
        $company_id = Company::select('id')->where('user_id', $user_id)->value('id');
        
        
        $request->validate([
            'job_title' => 'required',
            'job_description' => 'required',
            'salary' => 'required',
            'commute_type' => 'required',
            'contract_type' => 'required',
            'benefits' => 'required',
            'skill' => 'required|array|min:2',
        ]);

        $jobPost = new Jobpost;
        $jobPost->job_title = $request->job_title;
        $jobPost->job_description = $request->job_description;
        $jobPost->salary = $request->salary;
        $jobPost->commute_type = $request->commute_type;
        $jobPost->contract_type = $request->contract_type;
        $jobPost->company_id = $company_id;
        $jobPost->save();

        //$data = $request->input('skill_name');

        //$skills = Skills::select('skills.id')
        //->where('skills.skill_name', $data)->get();
        //$jobPost->skills()->attach($skills); 

        $jobPost->skills()->attach($request->skill);

        // $benefits = new Benefits;
        // $benefits->benefits = $request->benefits;
        // $jobPost->benefits()->save($benefits);
        $benefits = $request->benefits;
        
        foreach($benefits as $benefit){
            $input['benefits'] = $benefit;
            $jobPost->benefits()->create($input);
        }

        return redirect('/posts')->with('success', 'Job Post added Successfully.');
        
    }

    public function show($id){
        $user_id = Auth::id();
        $user = Auth::User($id);
        $jobPost = JobPost::find($id);
        $skills = Skills::find($id);
        $benefits = Benefits::find($id);

        $address = Address::join('company', 'company.id', '=', 'address.company_id')
            ->join('users', 'users.id', '=', 'company.user_id')
            ->where('users.id', $user_id)->first();
        
                
        $company = Company::join('users', 'users.id', '=', 'company.user_id')
            ->where('users.id', $user_id)->first();
        
        Session::put('jobPost', $id);
        

        return view('posts.show')->with('jobPost', $jobPost)->with('benefits', $benefits)->with('skills', $skills)->with('address', $address)->with('user', $user)->with('company', $company);

    }

    public function edit($id){
        $jobPost = JobPost::find($id);
        $benefits = Benefits::find($id);
        $skills = Skills::find($id);
       
        return view('posts.edit')->with('jobPost', $jobPost)->with('benefits', $benefits)->with('skills', $skills);
    }
    
    public function update(Request $request, $id) {
        $request->validate([
            'job_title' => 'required',
            'job_description' => 'required',
            'salary' => 'required',
            'commute_type' => 'required',
            'contract_type' => 'required',
            'benefits' => 'required',
        ]);
        
        $jobPost = JobPost::where('id',$id)->first();
        $benefit = Benefits::where('id',$id)->first();
        
    
        //Saves Job post changes
        $jobPost->job_title = $request->input('job_title');
        $jobPost->job_description = $request->input('job_description');
        $jobPost->salary = $request->input('salary');
        $jobPost->commute_type = $request->input('commute_type');
        $jobPost->contract_type = $request->input('contract_type');
        $jobPost->save();
    
    
        //Saves benefit changes
        $benefit->benefits = $request->input('benefits');
        $benefit->save();
        
        return redirect()->route('posts.index')->with('success', 'Job Post updated Successfully.');
    }


    public function destroy($id){

        $jobPost = JobPost::find($id);
        $skills = Skills::find($id);
        $benefits = Benefits::find($id);
        
        $jobPost->benefits()->delete();
        $jobPost->skills()->detach();
        $jobPost->delete();

        return redirect()->route('posts.index')->with('success', 'Post Removed Successfully');
    }
}