@extends('layouts.app')
@section('content')

<div class="page_single_content">

    <div class="page_description left">
        <div class="personal">
            <h1>{{$jobSeeker->first_name}} {{$jobSeeker->last_name}}</h1>
            <h3>{{$application->career_type}}</h3>

            <ul class="contact">
                <li><a href="mailto:{{$user->email}}">{{$user->email}}</a></li>
                <li>{{$jobSeeker->contact_number}}</li>
            </ul>
        </div>
        
        <div class="address">
            <ul>
                <li>{{$address->house_number}}, {{$address->street_name}}</li>
                <li>{{$address->city}}</li>
                <li>{{$address->county}}</li>
                <li>{{$address->postcode}}</li>
            </ul>
        </div>

        <div class="hobbies">
            <h2>Personal Profile</h2>
            <p>{{$application->biography}}</p>
            <h2>Hobby Description</h2>
            <p>{{$application->hobby_description}}</p>
        </div>
    </div>
    
    <div class="page_description right">
        <h2>Education History</h2>
        <ul class="list education">
            <li class="headings">
                <ul>
                    <li>Institution</li>
                    <li>Type</li>
                    <li>Course</li>
                    <li>Grade</li>
                </ul>
            </li>
            <ul>
                @foreach ($education as $certificate)
                    <li>{{ $certificate->place_of_institution }}</li>
                    <li>{{ $certificate->education_type }}</li>
                    <li>{{ $certificate->course_name }}</li>
                    <li>{{ $certificate->results }}</li>
                @endforeach
            </ul>
        </ul>

        <h2>Skill Set</h2>
        <div class="list skills">
            <div class="headings">
                <ul>
                    <li>Skill</li>
                </ul>
            </div>
            <ul class="all-skills-list">
                @foreach ($skills as $skill)
                        <li>{{ $skill->skill_name }}</li>
                @endforeach
            </ul>
        </div>

        <h2>Work History</h2>
        <ul class="list references">
            <li class="headings">
                <ul>
                    <li>Company Name</li>
                    <li>Employer Name</li>
                    <li>Employer Contact</li>
                    <li>Duration</li>
                </ul>
            </li>
            <ul>
                @foreach ($references as $reference)
                    <li>{{ $reference->previous_company_name }}</li>
                    <li>{{ $reference->employer_name }}</li>
                    <li>{{ $reference->employer_contact }}</li>
                    <li>{{ $reference->duration_worked }} Yr</li>
                @endforeach
            </ul>
        </ul>
        <p>Years Of Experience: {{$application->years_of_experience}}</p>
        <div class="apply-button">
            <a class="btn btn-blue" href="{{ route('application.edit', $jobSeeker->id, $address->id, $application->id, $certificate->id, $skill->id, $reference->id) }}">Edit Application</a>
        </div>
    </div>
</div>

@endsection