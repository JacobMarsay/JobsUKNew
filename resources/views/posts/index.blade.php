@extends('layouts.app')
@section('content')

<h1>Company Dashboard</h1>
<h2>Welcome back <br>{{Auth::user()->company->company_name}}</h2>
<div class="dashboard_content">
    <div class="items_section_left">
        @foreach ($jobPosts as $jobPost)
            <div class="items">
                <article>
                    <h3><a href="{{ route('posts.show', $jobPost->id) }}">{{ $jobPost->job_title }}</a></h3>
                    <p>{{ $jobPost->id }}</p>
                    <p>{{ $jobPost->company_name }}</p>
                    <p>{{ $jobPost->salary }}</p>
                    <p>{{ $jobPost->contract_type }}</p>
                    <p>{{ $jobPost->commute_type }}</p>
                    <p>{{ $address->city }}</p>
                    
                    {{-- @foreach ($skills as $skill)
                        <p>{{ $skill->skill_name }}</p>
                    @endforeach --}}
                
                    <a class="btn btn-blue" href="{{ route('posts.show', $jobPost->id) }}">Show</a>
                </article>
            </div>
        @endforeach
    </div>
</div>

<div class="items_section_right">
    <div class="notifications_section">
        <h2>Notifications</h2>
    </div>

    <div class="quick_links_section">
        <h2>Quick Links</h2>
    </div>
</div>
{{ $jobPosts->links() }}


@endsection