@extends('layouts.app')
@section('content')

<h2>Welcome back <br>{{Auth::user()->jobseeker->first_name}}</h2>
<div class="dashboard_content">
    <div class="items_section">

    </div>
    <div class="items_section updates">
        <div class="notifications_section">
            <div class="section_title_container">
                <div class="section_title">
                    <h2>Notifications</h2>
                </div>
                <svg width="53" height="53" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="26.5" cy="26.5" r="26.5" fill="#0792A5"/>
                    <path d="M14.161 21.185c0-2.126.742-4.198 2.126-5.93 1.384-1.733 3.34-3.039 5.597-3.737a3.046 3.046 0 0 1 .095-1.46c.15-.474.414-.915.774-1.29.36-.375.806-.676 1.31-.883a4.236 4.236 0 0 1 1.605-.314c.555 0 1.102.107 1.606.314.503.207.95.508 1.31.883.36.375.624.816.774 1.29.15.475.182.973.095 1.46 2.253.701 4.204 2.008 5.585 3.74 1.38 1.732 2.12 3.803 2.118 5.927v10.229l5.749 3.41v1.704H8.413v-1.705l5.748-3.41V21.186Zm15.33 17.048c0 .904-.404 1.772-1.122 2.411-.72.64-1.694.999-2.71.999-1.017 0-1.992-.36-2.71-.999-.719-.64-1.123-1.507-1.123-2.41h7.665Z" fill="#fff"/>
                </svg>
            </div>
            
            
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</li>
        </div>
    
        <div class="quick_links_section">
            <div class="section_title_container">
                <div class="section_title">
                    <h2>Quick Links</h2>
                </div>
                <svg width="53" height="53" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M26.5 0C11.863 0 0 11.865 0 26.5 0 41.133 11.864 53 26.5 53 41.133 53 53 41.135 53 26.5 53 11.864 41.134 0 26.5 0Zm13.314 21.783-6.481 6.482a3.697 3.697 0 0 1-2.631 1.09 3.7 3.7 0 0 1-2.632-1.09l-.254-.254-.69.69.253.253a3.726 3.726 0 0 1 0 5.264l-6.48 6.481a3.698 3.698 0 0 1-2.632 1.09 3.698 3.698 0 0 1-2.632-1.09l-2.45-2.45a3.726 3.726 0 0 1 0-5.264l6.481-6.48a3.697 3.697 0 0 1 2.633-1.09c.994 0 1.928.387 2.631 1.09l.253.253.69-.69-.253-.254a3.726 3.726 0 0 1 0-5.262L32.1 14.07a3.698 3.698 0 0 1 2.632-1.09 3.7 3.7 0 0 1 2.632 1.09l2.45 2.45a3.726 3.726 0 0 1 0 5.263Z" fill="#0792A5"/>
                    <path d="m25.182 30.644-1.253 1.253-1.944-1.943 1.253-1.253-.253-.253a.968.968 0 0 0-.687-.285.967.967 0 0 0-.688.285l-6.481 6.48a.974.974 0 0 0 0 1.375l2.45 2.45a.996.996 0 0 0 1.376.002l6.48-6.482a.974.974 0 0 0 0-1.376l-.253-.253ZM35.42 16.014a.967.967 0 0 0-.688-.285.965.965 0 0 0-.688.285l-6.481 6.48a.975.975 0 0 0 0 1.376l.253.253 1.923-1.922 1.943 1.943-1.922 1.923.253.253a.996.996 0 0 0 1.376 0l6.48-6.48a.974.974 0 0 0 0-1.376l-2.449-2.45Z" fill="#0792A5"/>
                </svg>
            </div>
            <ul>
                <ul>
                    <li><a class="quick_link" href="/">Find Jobs</a>
                    <li><a class="quick_link" href="/application">View My Application</a></li>
                    
                    <li><a class="quick_link" href="/logout">Logout</a></li>
                </ul>
            </ul>
        </div>
    </div>
</div>
<div class="pagination_container">
    <div class="pagination">
        
    </div>
</div>

@endsection

