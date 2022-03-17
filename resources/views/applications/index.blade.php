@extends('layouts.app')
@section('content')

<h2>Welcome back <br>{{Auth::user()->jobseeker->first_name}}</h2>

@endsection

