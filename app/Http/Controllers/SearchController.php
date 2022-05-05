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


class SearchController extends Controller
{
    public function showApplicants(Request $request){
        $post_id = $request->route('id');

        $jobPost = JobPost::select('jobpost.*')
        ->where('jobpost.id', $post_id)->first();

        var_dump($jobPost);


        return view('search/applicants');
    }
}