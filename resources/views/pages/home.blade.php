@extends('master')

@section('title', 'Home Page')
@section('content')
    @include('layouts.navbar')
    <div class="container">
        Home Page

        @if (Auth::check())
            <p>Welcome, {{ Auth::user()->name }}</p>
        @endif
        @if (Auth::guest())
            <p>Please log in to access more features.</p>
        @endif
    </div>
@endsection
