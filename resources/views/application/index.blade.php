@extends('layouts.app')
@section('content')

<div class="page_single_content">
    <div class="page_description">
        <h1>{{$jobSeeker->first_name}} {{$jobSeeker->last_name}}</h1>
        <h2>{{$application->career_type}}</h2>
        <p>{{$user->email}}
        <p>{{$jobSeeker->contact_number}}</p>
        
        <h2>Address Details</h2>
        <ul>
            <li>{{$address->id}}</li>
            <li>{{$address->house_number}}, {{$address->street_name}}</li>
            <li>{{$address->postcode}}</li>
            <li>{{$address->city}}</li>
            <li>{{$address->county}}</li>
        </ul>
        <h2>Personal Profile</h2>
        <li>{{$application->biography}}</li>
        <h2>Hobby Description</h2>
        <li>{{$application->hobby_description}}</li>
    </div>
    
    
    
    
    


    <div class="page_description right">
        <h2>Education History</h2>
        @foreach ($education as $certificate)
            <li>{{ $certificate->id}}</li>
            <li>{{ $certificate->place_of_institution }}</li>
            <li>{{ $certificate->education_type }}</li>
            <li>{{ $certificate->course_name }}</li>
            <li>{{ $certificate->results }}</li>
        @endforeach

        <h2>Skill Set</h2>
        @foreach ($skills as $skill)
            <li>{{ $skill->skill_name }}</li>
        @endforeach

        <h2>Work History</h2>
        @foreach ($references as $reference)
            <li>{{ $reference->id}}</li>
            <li>{{ $reference->previous_company_name }}</li>
            <li>{{ $reference->employer_name }}</li>
            <li>{{ $reference->employer_contact }}</li>
            <li>Duration Worked: {{ $reference->duration_worked }} Yr</li>
        @endforeach
        <li>Years Of Experience: {{$application->years_of_experience}}</li>
        <a class="btn btn-blue" href="{{ route('application.edit', $jobSeeker->id, $address->id, $application->id, $certificate->id, $skill->id, $reference->id) }}">Edit Application</a>
    </div>
</div>

@endsection