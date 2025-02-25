@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Dashboard</h3>
        </div>
        <div class="card-body">
            <p>Welcome, {{ Auth::user()->name }}! You are logged in.</p>
        </div>
    </div>
@endsection
