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



class ApplicationController extends Controller
{
    public function index(){

        return view('applications/index');
    }


}