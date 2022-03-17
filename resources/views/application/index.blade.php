@extends('layouts.app')
@section('content')

<h2>Your Application</h2>

<li>{{$jobSeeker->id}}</li>
<li>{{$jobSeeker->first_name}} {{$jobSeeker->last_name}}</li>
<li>{{$jobSeeker->contact_number}}</li>

<li>{{$application->id}}</li>
<li>{{$application->career_type}}</li>
<li>Years Of Experience: {{$application->years_of_experience}}</li>
<li>{{$application->biography}}</li>
<li>{{$application->hobby_description}}</li>

<h2>Address Details</h2>
<li>{{$address->id}}</li>
<li>{{$address->house_number}}, {{$address->street_name}}</li>
<li>{{$address->postcode}}</li>
<li>{{$address->city}}</li>
<li>{{$address->county}}</li>

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
<a class="btn btn-blue" href="{{ route('application.edit', $jobSeeker->id, $address->id, $application->id, $certificate->id, $skill->id, $reference->id) }}">Edit Application</a>

@endsection