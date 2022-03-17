@extends('layouts.app')
@section('content')
<h1>JobSeeker Registration</h1>
<form class="" action="{{ route('application.update', $jobSeeker->id, $address->id, $application->id) }}" method="POST"> 
    
    @csrf
    @method('PUT')
    <div class="">
        <h1>Personal Details</h1>
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" id="first_name" value="{{ $jobSeeker->first_name }}"/>
           
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" id="last_name" value="{{ $jobSeeker->last_name }}"/>
            
        <label for="contact_number">Contact Number</label>
        <input type="text" name="contact_number" id="contact_number" value="{{ $jobSeeker->contact_number }}"/>
           
    </div>

    <div class="">
        <h1>Address Details</h1>
        <label for="street_name">Street Name</label>
        <input type="text" name="street_name" id="street_name" value="{{ $address->street_name }}"/>
        
        <label for="house_number">House/Flat Number</label>
        <input type="text" name="house_number" id="house_number" value="{{ $address->house_number }}"/>
            
        <label for="postcode">Postcode</label>
        <input type="text" name="postcode" id="postcode" value="{{ $address->postcode }}"/>
           
        <label for="city">City</label>
        <input type="text" name="city" id="city" value="{{ $address->city }}"/>
           
        <label for="county">County</label>
        <input type="text" name="county" id="county" value="{{ $address->county }}"/>
        
    </div>

    <div class="">
        <h1>Career Type</h1>
        <label for="career_type">Career Type</label>
        <input type="text" name="career_type" id="career_type" value="{{ $application->career_type }}"/>
    </div>

    <div class="">
        <h1>Years of Experience</h1>
        <label for="years_of_experience">Years of Experience</label>
        <input type="text" name="years_of_experience" id="years_of_experience" value="{{ $application->years_of_experience }}"/>
    </div>
    @php
        
    @endphp
    <div class="">
        <h1>Education</h1>
        {{-- @foreach ($certificate as $test) --}}
        <label for="place_of_institution">Institution:<label>
            <input type="text" value="{{ $education->place_of_institution }}" id="place_of_institution" name="place_of_institution"/>
  
    
            <label for="education_type">Certificate Type:<label>
            <select id="education_type" value="{{ $education->education_type }}" name="education_type" size="8">
                <option value="GCSE">GCSE</option>
                <option value="A Level">A Level</option>
                <option value="Diploma">Diploma</option>
                <option value="Foundation Level">Foundation Level</option>
                <option value="Bachelor Degree">Bachelor Degree</option>
                <option value="Masters Degree">Masters Degree</option>
                <option value="PHD">PHD</option>
                <option value="Other Education">Other</option>
            </select>
            <label for="course_name">Course:<label>
            <input type="text" value="{{ $education->course_name }}" id="course_name" name="course_name"/>
                
            <label for="results">Grades:<label>
            <input type="text" value="{{ $education->results }}" id="results" name="results"/>
               
            {{-- @endforeach --}}
    </div>


    <div class="">
        <h1>Skill Set</h1>
        {{-- @foreach ($skills as $skill) --}}
            {{-- <label for="skill_name">Skills<label>
            <input type="text" value="{{ $skills->skill_name }}" id="skill_name" name="skill_name">
            <select id="skill_type" name="skill_type" value="{{ $skills->skill_type }}">
                <option value="Soft Skill">Soft Skill</option>
                <option value="Technical Skill">Technical Skill</option>
            </select> --}}
        {{-- @endforeach --}}
    </div>

    <div class="">
        <h1>References</h1>
        {{-- @foreach ($application->references as $reference) --}}
            <label for="previous_company_name">Previous Company</label>
            <input type="text" name="previous_company_name" value="{{ $references->previous_company_name }}" id="previous_company_name" row="5" class=" p-2 bg-gray-200 @error('previous_company_name') is-invalid @enderror">
            @error('previous_company_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="employer_name">Employer Name:<label>
                <input type="text" value="{{ $references->employer_name }}" id="employer_name" name="employer_name" class=" p-2 bg-gray-200 @error('employer_name') is-invalid @enderror">
                @error('employer_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            <label for="employer_contact">Employers Contact Details:<label>
            <input type="text" value="{{ $references->employer_contact }}" id="employer_contact" name="employer_contact" class=" p-2 bg-gray-200 @error('employer_contact') is-invalid @enderror">
            @error('employer_contact')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <label for="duration_worked">Duration Worked:<label>
            <input type="number" value="{{ $references->duration_worked }}" id="duration_worked" name="duration_worked" class=" p-2 bg-gray-200 @error('duration_worked') is-invalid @enderror">
            @error('duration_worked')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        {{-- @endforeach --}}
    </div>

    <div class="">
        <h1>Biography</h1>
        <label for="biography">Biography</label>
        <input type="text" name="biography" id="biography" 
        <textarea id="biography" name="biography" value="{{ $application->biography }}"/></textarea>
    </div>

    <div class="">
        <h1>Hobbies & Activities</h1>
        <label for="hobby_description">Hobbies & Activities</label>
        <input type="text" name="hobby_description" id="hobby_description" 
        <textarea id="hobby_description" name="hobby_description" value="{{ $application->hobby_description }}"/></textarea>
    </div>

    <button type="submit" class="btn btn-blue">Update Application</button>
</form>
@endsection