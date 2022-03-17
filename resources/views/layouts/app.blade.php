<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>u1770275 - @yield('title')</title>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
    <body>
        <?php $role=Auth::user()->role; ?>
        @if ($role == 2)
            <div class="navigation">
                <div class="navbar">
                
                    <ul>
                        <li> <a href="/posts">Dashboard</a>
                        <li><a class="navbar__link" href="/posts/create">Add Job Post</a></li>
                        <li><a class="navbar__link" href="/posts">My Job Posts</a></li>
                        <li><a class="navbar__link" href="/">Settings</a></li>
                        <li><a class="navbar__link" href="/logout">Logout</a></li>
                    </ul>
                </div>          
            </div>
        @elseif($role == 1)    
            <div class="navigation">
                <div class="navbar">
                    <ul>
                        <li><a class="navbar__link" href="/applications">Dashboard</a></li>
                        <li><a class="navbar__link" href="/">Find Jobs</a></li>
                        <li><a class="navbar__link" href="/application">My Application</a></li>
                        <li><a class="navbar__link" href="/">Settings</a></li>
                        <li><a class="navbar__link" href="/logout">Logout</a></li>
                    </ul>
                </div>          
            </div>
        @endif

        <div class="content">
            <div class="container">
                @yield('content')
            </div>
        </div>

        
    </body>
</html>