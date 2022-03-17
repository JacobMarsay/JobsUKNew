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
use DB;


class ApplicationController extends Controller
{
    public function index(){

        return view('applications/index');
    }


}



// $application = JobSeeker::join('users', 'users.id', '=', 'jobseeker.user_id')
        //     ->join('application', 'application.job_seeker_id', '=', 'jobseeker.id')
        //     ->where('users.id', $user_id)->get();



// $application = Application::join('jobseeker', 'jobseeker.id', '=', 'application.job_seeker_id')
        // ->join('users', 'users.id', '=', 'jobseeker.user_id')
        // ->where('users.id', $user_id)->first();