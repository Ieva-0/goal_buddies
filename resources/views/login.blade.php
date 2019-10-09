@extends('layout')
@section('title', 'Log In')

@section('content')
    <h3>Log In</h3>

    <form method="post" action="/">
        {{ csrf_field() }}
        <div>
            <input type="text" name="name" placeholder="Username">
        </div>
        <div>
            <input type="password" name="password" placeholder="Password">
        </div>
        <div>
            <button type="submit">Create account</button>
        </div>
    </form>

@endsection
