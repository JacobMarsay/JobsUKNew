<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\JobPost;
use App\Models\Company;
use App\Models\JobSeeker;
use App\Models\Address;
use App\Models\Application;
use App\Models\Skills;
use Session;


class SearchController extends Controller
{
    public function showApplicants(JobPost $jobPost){

        $jobPostId = session('jobPostId');
        var_dump($jobPostId);


        $jobPostSkills = Skills::join('job_post_skills', 'skills.id', '=', 'job_post_skills.skills_id')
        ->where('job_post_skills.job_post_id', $jobPostId)->get();

        var_dump($jobPostId);
        

        foreach($jobPostSkills as $test) {
            $skillsOnJobPost[] = $test->id;
        }

        

        return view('search/applicants')->with(['test' => $jobPost]);
    }
}