@extends('layouts.master')

@section('content')
    
    <div class="links">
        <a href="{{ url('/repository') }}">Repositories</a>
        <a href="{{ url('/event') }}">Fire Event</a>
        <a style="color: red;" href="{{ url('/queue') }}">Queue</a>
        <a href="https://forge.laravel.com">Forge</a>
        <a href="https://github.com/laravel/laravel">GitHub</a>
    </div>


@endsection
