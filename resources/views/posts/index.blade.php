@extends('layouts.app')
@section('content')
<div class="page_title">
    <h1>Job Post Dashboard</h1>
</div>
<div class="dashboard_content">
    <h2 class="welcome-title">Welcome back: <span>{{Auth::user()->company->company_name}}</span></h2>
    <div class="applications">

        <div class="left">
            <div class="applications_section">
            @foreach ($jobPosts as $jobPost)
                <div class="post_card">
                    <div class="items">
                        <article>
                            <h3><a href="{{ route('posts.show', $jobPost->id) }}">{{ $jobPost->job_title }}</a></h3>
                        
                            <svg width="15" height="14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.014 10.502c-.719 0-1.303-.545-1.303-1.216v-2.02c0-.672.584-1.217 1.303-1.217h3.397l.061.001V4.037c0-.518-.45-.938-1.005-.938H1.005C.45 3.1 0 3.52 0 4.037v8.477c0 .518.45.938 1.005.938h12.462c.555 0 1.005-.42 1.005-.938V10.5l-.061.001h-3.397Z" fill="#727272" fill-opacity=".84"/>
                                <path d="M14.41 6.715h-3.396c-.325 0-.59.246-.59.55v2.02c0 .304.265.55.59.55h3.397c.325 0 .59-.246.59-.55v-2.02c0-.304-.265-.55-.59-.55Zm-2.225 2.354c-.47 0-.85-.356-.85-.794 0-.438.38-.794.85-.794s.85.356.85.794c0 .438-.38.794-.85.794ZM11.717 1.38c-.225-.635-.959-.98-1.64-.77L4.971 2.185h7.03l-.284-.804Z" fill="#727272" fill-opacity=".84"/>
                            </svg>
                            <p>{{ $jobPost->salary }}</p>
                            <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.5 0C3.802 0 0 3.578 0 8c0 4.422 3.802 8 8.5 8S17 12.422 17 8c0-4.422-3.802-8-8.5-8Zm.419 8.332-2.317 2.592a.571.571 0 0 1-.771.063.494.494 0 0 1-.067-.726l2.189-2.449v-5.82c0-.284.245-.515.547-.515.302 0 .547.23.547.515V8a.497.497 0 0 1-.128.332Z" fill="#727272" fill-opacity=".84"/>
                            </svg>
                            <p>{{ $jobPost->contract_type }}</p>
                            <svg width="21" height="19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.595 19v-3.527h5.811V19h4.38V0H3.214v19h4.38Zm5.811-17.255h2.451v2.218h-2.451V1.745Zm0 3.224h2.451v2.219h-2.451V4.969Zm0 3.225h2.451v2.217h-2.451V8.194Zm0 3.223h2.451v2.219h-2.451v-2.219Zm-4.13-9.672h2.45v2.218h-2.45V1.745Zm0 3.224h2.45v2.219h-2.45V4.969Zm0 3.225h2.45v2.217h-2.45V8.194Zm0 3.223h2.45v2.219h-2.45v-2.219ZM5.143 1.745h2.451v2.218h-2.45V1.745Zm0 3.224h2.451v2.219h-2.45V4.969Zm0 3.225h2.451v2.217h-2.45V8.194Zm0 3.223h2.451v2.219h-2.45v-2.219Z" fill="#727272" fill-opacity=".84"/>
                            </svg>
                            <p>{{ $address->city }}</p>
                            <svg width="23" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#a)" fill="#727272" fill-opacity=".84">
                                <path d="m18.056 12.135-2.798-1.685a1.243 1.243 0 0 1-.455-.603l-.867-3.077a.724.724 0 0 0-.094-.207.736.736 0 0 0-.65-.406l-3.7.167a.717.717 0 0 0-.437.177c-.025.016-.05.031-.073.05L6.468 8.572c-.29.234-.453.71-.37 1.082l.996 4.47a.84.84 0 0 0 .795.654.73.73 0 0 0 .075-.004l.372-.038a.688.688 0 0 0 .493-.29.75.75 0 0 0 .113-.578l-.708-3.45a.657.657 0 0 1 .198-.562l.448-.36.23 5.54c0 .006.002.011.003.017L8.09 17.42c-.13.297-.452.71-.706.901l-2.397 1.8c-.386.29-.531.87-.332 1.32l.328.74c.13.294.393.477.685.477.166 0 .33-.059.474-.17l3.164-2.458c.315-.245.704-.722.885-1.086l1.579-3.174c.012-.025.02-.053.03-.08l.111-.004 2.585 7.436c.182.525.67.878 1.211.878.129 0 .256-.02.378-.06l.16-.054c.316-.104.57-.331.715-.638.144-.307.162-.655.05-.98l-2.723-7.83c-.013-.037-.03-.07-.045-.104l-.088-2.102 3.002 1.627a.722.722 0 0 0 .344.088.75.75 0 0 0 .663-.41l.179-.343a.812.812 0 0 0-.287-1.059ZM10.934 5.6l.117-.003a2.62 2.62 0 0 0 1.861-.905 2.854 2.854 0 0 0 .703-2.013c-.064-1.543-1.3-2.743-2.796-2.676a2.62 2.62 0 0 0-1.861.905 2.854 2.854 0 0 0-.703 2.013c.062 1.502 1.239 2.678 2.679 2.678Z"/>
                                </g>
                                <defs>
                                <clipPath id="a">
                                    <path fill="#fff" d="M0 0h23v24H0z"/>
                                </clipPath>
                                </defs>
                            </svg>
                            <p>{{ $jobPost->commute_type }}</p>
                            
                            <div class="button_container">
                                <a class="show_button" href="{{ route('posts.show', $jobPost->id, $user->id, $address->id) }}">More Details</a>
                            </div>
                        </article>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="right">
        <div class="notifications_section">
            <div class="section_title_container">
                <div class="section_title">
                    <h2>Notifications!!!</h2>
                </div>
                <svg width="53" height="53" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="26.5" cy="26.5" r="26.5" fill="#0792A5"/>
                    <path d="M14.161 21.185c0-2.126.742-4.198 2.126-5.93 1.384-1.733 3.34-3.039 5.597-3.737a3.046 3.046 0 0 1 .095-1.46c.15-.474.414-.915.774-1.29.36-.375.806-.676 1.31-.883a4.236 4.236 0 0 1 1.605-.314c.555 0 1.102.107 1.606.314.503.207.95.508 1.31.883.36.375.624.816.774 1.29.15.475.182.973.095 1.46 2.253.701 4.204 2.008 5.585 3.74 1.38 1.732 2.12 3.803 2.118 5.927v10.229l5.749 3.41v1.704H8.413v-1.705l5.748-3.41V21.186Zm15.33 17.048c0 .904-.404 1.772-1.122 2.411-.72.64-1.694.999-2.71.999-1.017 0-1.992-.36-2.71-.999-.719-.64-1.123-1.507-1.123-2.41h7.665Z" fill="#fff"/>
                </svg>
            </div>
    
            <ul>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</li>
            </ul>
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
                    <li><a class="quick_link" href="/posts">Add Job Post</a>
                    <li><a class="quick_link" href="/posts/create">Manage My Account</a></li>
                    <li class="quick_link" href="/posts">Change Theme</li>
                    <li><a class="quick_link" href="/logout">Logout</a></li>
                </ul>
            </ul>
        </div>
    </div>
</div>
</div>


<div class="pagination_container">
    <div class="pagination">
        <p>{{ $jobPosts->links() }}</p>
    </div>
</div>

@endsection