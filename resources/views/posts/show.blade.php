@extends('layouts.app')
@section('content')

<li>{{ $user->email }}</li>
<li>{{ $address->street_name }}</li>
<li>{{ $company->company_name }}</li>
<h2>Job Overview</h2>

<ul class="jobpost__list">
    <li>{{ $jobPost->job_title }}</li>
    <li>{{ $jobPost->job_description }}</li>
    <li>{{ $jobPost->salary }}</li>
    <li>{{ $jobPost->commute_type }}</li>
    <li>{{ $jobPost->contract_type }}</li>

    {{-- <li>{{ $company->company_name }}</li> --}}
    
    {{-- <li>{{ $address->house_number}}</li>
    <li>{{ $address->street_name }}</li>
    <li>{{ $address->postcode }}</li>
    <li>{{ $address->city }}</li>
    <li>{{ $address->county }}</li> --}}

</ul>


<h2>Required Skills</h2>
@foreach ($jobPost->skills as $skill)
    <li>{{ $skill->skill_name }}</li>
@endforeach

<h2>Benefits</h2>
@foreach ($jobPost->benefits as $benefits)
    <ul>
        <li>{{ $benefits->benefits }}</li>
    </ul>
@endforeach
<form action="{{ route('posts.destroy', $jobPost->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-red">Delete</button>
</form>

<a class="show_button" href="{{ route('showApplications',$jobPost->id) }}">Find Applicants</a>

<a class="btn btn-blue" href="{{ route('posts.edit', $jobPost->id) }}">Edit</a>
@endsection

