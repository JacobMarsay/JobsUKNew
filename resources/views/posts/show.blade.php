@extends('layouts.app')
@section('content')

<div class="company-show">
    <div class="left">
        <div class="section header">
            <ul>
                <li class="title">{{ $jobPost->job_title }}</li>
                <li class="name">{{ $company->company_name }}</li>
                <ul class="flex">
                    <li class="email"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75.3 75.3" style="enable-background:new 0 0 75.3 75.3" xml:space="preserve"><path d="M66.1 12.1H9.2c-5.1 0-9.2 4.1-9.2 9.2V54c0 5.1 4.1 9.2 9.2 9.2h56.9c5.1 0 9.2-4.1 9.2-9.2V21.3c0-5.1-4.1-9.2-9.2-9.2zm-4.5 6-24 15.4-24-15.4h48zm4.5 39.1H9.2C7.4 57.2 6 55.8 6 54V21.5l29.8 19.2s.1 0 .1.1c0 0 .1 0 .1.1.2.1.5.2.7.3h.1c.3.1.5.1.8.1.3 0 .5 0 .8-.1h.1c.2-.1.5-.2.7-.3 0 0 .1 0 .1-.1 0 0 .1 0 .1-.1l29.8-19.2V54c.1 1.8-1.3 3.2-3.1 3.2z" style="fill:#727272"/></svg></span> {{ $user->email }}</li>
                    <li class="number"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" style="enable-background:new 0 0 28 28" xml:space="preserve"><path d="m7.9 2.6 1.7-.5c1.6-.5 3.2.3 3.9 1.8l1 2.3c.6 1.3.3 2.8-.7 3.7L12 11.6l-.1.1c-.2.4.1 1.4 1 3 1 1.8 1.8 2.5 2.2 2.3l2.4-.7c1.3-.4 2.8.1 3.6 1.2l1.5 2c1 1.3.8 3.1-.4 4.3L20.8 25c-.9.8-2.1 1.2-3.3.9-3.5-.7-6.7-3.6-9.5-8.4-2.8-4.9-3.7-9-2.6-12.4.4-1.2 1.4-2.1 2.5-2.5zm.5 1.5c-.7.2-1.3.7-1.5 1.4-1 2.9-.2 6.7 2.4 11.2 2.6 4.5 5.5 7.1 8.5 7.7.7.1 1.5-.1 2-.6l1.3-1.2c.6-.6.7-1.6.2-2.3l-1.5-2c-.4-.6-1.2-.9-1.9-.6l-2.4.7c-1.3.4-2.5-.7-3.9-3-1.1-2-1.5-3.4-1-4.4.1-.2.2-.4.4-.5l1.8-1.7c.5-.5.7-1.3.4-2l-1-2.3c-.4-.8-1.3-1.2-2.1-1l-1.7.6z" style="fill:#727272"/></svg></span> Contact Number</li>
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
        
        <div class="section">
            <h2>Employee Benefits</h2>
            <ul class="employee">
                @foreach ($jobPost->benefits as $benefits)
                    <li>{{ $benefits->benefits }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="right">
        <div class="section">
            <h2>Contract Details</h2>
            <ul class="contract">
                <li>{{ $jobPost->commute_type }}</li>
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

