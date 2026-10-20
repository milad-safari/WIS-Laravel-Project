@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<h1>Student Dashboard</h1>
<p>Welcome, {{ auth()->user()->name }}!</p>
<p>Email: {{ auth()->user()->email }}</p>
<p>You have successfully signed in.</p>
<form method="POST" action="{{ route('logout') }}">
@csrf
<button type="submit">Sign Out</button>
</form>
@endsection
