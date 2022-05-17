@extends('layouts.app')
@section('content')

<div class="company-show">
    <div class="left">
        <div class="section header">
            <ul>
                <li class="title">{{ $jobPost->job_title }}</li>
                <li class="name">{{ $company->company_name }}</li>
                <ul class="flex">
                    <li class="email"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75.3 75.3" style="enable-background:new 0 0 75.3 75.3" xml:space="preserve"><path d="M66.1 12.1H9.2c-5.1 0-9.2 4.1-9.2 9.2V54c0 5.1 4.1 9.2 9.2 9.2h56.9c5.1 0 9.2-4.1 9.2-9.2V21.3c0-5.1-4.1-9.2-9.2-9.2zm-4.5 6-24 15.4-24-15.4h48zm4.5 39.1H9.2C7.4 57.2 6 55.8 6 54V21.5l29.8 19.2s.1 0 .1.1c0 0 .1 0 .1.1.2.1.5.2.7.3h.1c.3.1.5.1.8.1.3 0 .5 0 .8-.1h.1c.2-.1.5-.2.7-.3 0 0 .1 0 .1-.1 0 0 .1 0 .1-.1l29.8-19.2V54c.1 1.8-1.3 3.2-3.1 3.2z" style="fill:#727272"/></svg></span> <a href="mailto:{{ $user->email }}">{{ $user->email }}</a></li>
                </ul>
            </ul>
        
            <ul class="address">
                <li>{{ $address->house_number}}</li>
                <li>{{ $address->street_name }}</li>
                <li>{{ $address->city }}</li>
                <li>{{ $address->county }}</li>
                <li>{{ $address->postcode }}</li>
            </ul>
        </div>
        
        <div class="section">
            <h2>Job Description</h2>
            <ul class="jobpost__list">
                <li>{{ $jobPost->job_description }}</li>
            </ul>
        </div>
    </div>


    <div class="right">
        <div class="section">
            <h2>Contract Details</h2>
            <ul class="contract">
                <li>{{ $jobPost->commute_type }}</li>
                <li>{{ $address->city }}</li>
                <li>{{ $jobPost->contract_type }}</li>
                <li>{{ $jobPost->salary }}</li>
            </ul>
        </div>

        <div class="section">
            <h2>Skill Requirements</h2>
            <ul class="all-skills-list">
                @foreach ($jobPost->skills as $skill)
                    <li>{{ $skill->skill_name }}</li>
                @endforeach
            </ul>
        </div>

        <div class="section">
            <h2>Employee Benefits</h2>
            <ul class="employee">
                @foreach ($jobPost->benefits as $benefits)
                    <li>{{ $benefits->benefits }}</li>
                @endforeach
            </ul>
        </div>
        
        
        <div class="controls-wrapper">
            <form action="{{ route('posts.destroy', $jobPost->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-red">Delete</button>
            </form>
            
            <a class="show_button btn btn-blue" href="{{ route('showApplications',$jobPost->id) }}">Find Applicants</a>
            
            <a class="btn btn-blue" href="{{ route('posts.edit', $jobPost->id) }}">Edit</a>
        </div>

    </div>
</div>
@endsection

