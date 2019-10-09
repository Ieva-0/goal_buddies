@extends('layout')
@section('title', 'Goal Buddies')

@section('content')
    <h3>Registration</h3>

    <form method="POST" action="/user">
        {{ csrf_field() }}
        <div>
            <input type="email" name="email" placeholder="Email address">
        </div>
        <div>
            <input type="text" name="name" placeholder="Username">
        </div>
        <div>
            <input type="password" name="password" placeholder="Password">
        </div>
        <div>
            <input type="text" name="remember_token" placeholder="Security answer">
        </div>
        <div>
            <button type="submit">Create account</button>
        </div>
    </form>

@endsection
