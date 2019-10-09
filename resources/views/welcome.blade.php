@extends('layout')
@section('title', 'Goal Buddies')

@section('content')
    <h3>Welcome to goal buddies! If you have a goal but no motivation, find a friend here and motivate each other :)</h3>

    @foreach($goals as $goal)
        <ul>
            <li>{{ $goal->title }}</li>
        </ul>
    @endforeach

@endsection
