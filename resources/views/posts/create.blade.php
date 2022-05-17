@extends('layouts.app')
@section('content')
<form class="job-post-single" action="{{ route('posts.store') }}" method="POST">
    @csrf
    
    <div class="">
        <h1>Job Information</h1>
        <label for="job_title">
            <input placeholder="Job Title" type="text" id="job_title" name="job_title">
        </label>
        <label for="job_description">
            <textarea placeholder="Job Description" id="job_description" name="job_description"></textarea>
        </label>
    </div>


    <div class="">
        <h1>Skill Requirements</h1>
        <p>Please list the appropraite skills required</p>
        <div class="skills-wrapper">
            @foreach($skills as $skill)
                <div class="skill-list">
                    <label for="skillCheck{{$skill->skill_name}}">
                    <input id="skillCheck{{$skill->id}}" type="checkbox" value="{{$skill->id}}" name='skill[]'/>
                        <p>{{$skill->skill_name}}</p>
                    </label>
                </div>
            @endforeach
        </div>
    </div>

    <div class="">
        <h1>Salary</h1>
        <label for="salary">
            <input placeholder="Salary" type="text" id="salary" name="salary">
        </label>
    </div>

    <div class="">
        <h1>Contract And Commute Details</h1>
        <label for="commute_type">
            <input placeholder="Commute Type" type="text" id="commute_type" name="commute_type">
        </label>
        <label for="contract_type">
                <input placeholder="Contract Length" type="text" id="contract_type" name="contract_type">
        </label>
    </div>

    <div class="">
        <h1>Employment Benefits</h1>

        <div class="benefits-wrapper">
            <div class="benefit-row">
                <input class="benefit" id="benefits" placeholder="Benefit" type="text" name="benefits">

                <div class="add-button-wrapper">
                    <button class="add-benefit-input">+</button>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-blue">Submit</button>
    </div>
    
</form>

@endsection 