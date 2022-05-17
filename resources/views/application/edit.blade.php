@extends('layouts.app')
@section('content')
<div class="job-post-single">
<h1>JobSeeker Registration</h1>
<form class="" action="{{ route('application.update', $jobSeeker->id, $address->id, $application->id) }}" method="POST"> 
    
    @csrf
    @method('PUT')
    <div class="">
        <h1>Personal Details</h1>
        <label for="first_name">
            <input type="text" name="first_name" id="first_name" value="{{ $jobSeeker->first_name }}"/>
        </label>
        
        <label for="last_name">
            <input type="text" name="last_name" id="last_name" value="{{ $jobSeeker->last_name }}"/>
        </label>
            
        <label for="contact_number">
            <input type="text" name="contact_number" id="contact_number" value="{{ $jobSeeker->contact_number }}"/>
        </label>
           
    </div>

    <div class="">
        <h1>Address Details</h1>

        <label for="house_number">
            <input type="text" name="house_number" id="house_number" value="{{ $address->house_number }}"/>
        </label>

        <label for="street_name">
            <input type="text" name="street_name" id="street_name" value="{{ $address->street_name }}"/>
        </label>

        <label for="postcode">
            <input type="text" name="postcode" id="postcode" value="{{ $address->postcode }}"/>
        </label>
            
        <label for="city">
            <input type="text" name="city" id="city" value="{{ $address->city }}"/>
        </label>
           
        <label for="county">
            <input type="text" name="county" id="county" value="{{ $address->county }}"/>
        </label>
    </div>

    <div class="">
        <h1>Career Type</h1>
        <label for="career_type">
            <input type="text" name="career_type" id="career_type" value="{{ $application->career_type }}"/>
        </label>
    </div>

    <div class="">
        <h1>Years of Experience</h1>
        <label for="years_of_experience">
            <input type="text" name="years_of_experience" id="years_of_experience" value="{{ $application->years_of_experience }}"/>
        </label>
    </div>
    @php
        
    @endphp
    <div class="">
        <h1>Education</h1>
          {{-- NEEDS MODIFYING FOR MULTIPLE EDUCATION --}}

        <label for="place_of_institution">
            <input type="text" name="place_of_institution" id="place_of_institution" value="{{$education->place_of_institution}}">
        </label>

        <label for="education_type">
            <input type="text" name="education_type" id="education_type" value="{{$education->education_type}}">
        </label>

        <label for="course_name">
            <input type="text" name="course_name" id="course_name" value="{{$education->course_name}}">
        </label>

        <label for="results">
            <input type="text" name="results" id="results" value="{{$education->results}}">
        </label>
    </div>

    {{-- NEEDS MODIFYING FOR ADDING MULTIPLE SKILLS --}}


    {{-- <div class="">
        <h1>Skills</h1>
        <div class="skills-wrapper">
            @foreach($application->skills as $skill)
                <div class="skill-list">
                    <label for="skillCheck{{$skill->skill_name}}">
                    <input id="skillCheck{{$skill->id}}" type="checkbox" value="{{$skill->id}}" name='skill[]'/>
                        <p>{{$skill->skill_name}}</p>
                    </label>
                </div>
            @endforeach
        </div>
    </div> --}}

    <div class="">
        <h1>References</h1>
        {{-- NEEDS MODIFYING FOR MULTIPLE REFERENCES --}}
        {{-- @foreach ($application->references as $reference) --}}

            <label for="previous_company_name">
                <input type="text" name="previous_company_name" value="{{ $references->previous_company_name }}">
            </label>

            <label for="employer_name">
                <input type="text" name="employer_name" value="{{ $references->employer_name }}">
            </label>

            <label for="employer_contact">
                <input type="text" value="{{ $references->employer_contact }}" id="employer_contact" name="employer_contact">
            </label>

            <label for="duration_worked">
                <input type="number" value="{{ $references->duration_worked }}" id="duration_worked" name="duration_worked">
            </label>
        {{-- @endforeach --}}
    </div>

    <div class="">
        <h1>Biography</h1>
        <label for="biography">
            <textarea name="biography">{{ $application->biography }}</textarea>
        </label>
    </div>

    <div class="">
        <h1>Hobbies & Activities</h1>
        <label for="hobby_description">
            <textarea id="hobby_description" name="hobby_description">{{ $application->hobby_description }}</textarea>
        </label>
    </div>

    <button type="submit" class="btn btn-blue">Update Application</button>
</form>
</div>
@endsection