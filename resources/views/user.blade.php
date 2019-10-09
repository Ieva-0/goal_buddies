@extends('layout')
@section('title', 'User info')

@section('content')
    <h3>Welcome {{ $user->name }} :)</h3>
    <a href="/">Back to home page</a>
@endsection
