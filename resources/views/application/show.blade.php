@extends('layouts.app')
@section('content')

<h2>{{$jobSeeker->first_name}} {{$jobSeeker->last_name}}</h2>
<li>{{$jobSeeker->contact_number}}</li>
<li>{{$application[0]->email}}</li>

<li>{{$application->career_type}}</li>
<li>Years Of Experience: {{$application->years_of_experience}}</li>
<li>{{$application->biography}}</li>
<li>{{$application->hobby_description}}</li>

<h2>Address Details</h2>
<li>{{$address->house_number}}, {{$address->street_name}}</li>
<li>{{$address->postcode}}</li>
<li>{{$address->city}}</li>
<li>{{$address->county}}</li>

<h2>Education History</h2>
@foreach ($education as $certificate)

    <li>{{ $certificate->place_of_institution }}</li>
    <li>{{ $certificate->education_type }}</li>
    <li>{{ $certificate->course_name }}</li>
    <li>{{ $certificate->results }}</li>

@endforeach

<h2>Work History</h2>
@foreach ($references as $reference)

    <li>{{ $reference->previous_company_name }}</li>
    <li>{{ $reference->employer_name }}</li>
    <li>{{ $reference->employer_contact }}</li>
    <li>Duration Worked: {{ $reference->duration_worked }} Yr</li>

@endforeach

@endsection



<a class="btn btn-blue" href="{{ route('application.edit') }}">Edit</a>