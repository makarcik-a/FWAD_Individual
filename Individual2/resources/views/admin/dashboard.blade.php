<!-- resources/views/admin/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Manager Control Panel</h1>
        <ul>
            <li><a href="{{ route('admin.register') }}">Register a New User</a></li>
            <li><a href="{{ route('admin.add_subscription') }}">Add a Subscription</a></li>
            <li><a href="{{ route('admin.edit_subscription') }}">Change Subscription Details</a></li>
            <li><a href="{{ route('admin.view_subscriptions') }}">View List of Subscriptions</a></li>
            <li><a href="{{ route('admin.logout') }}">Logout</a></li>
        </ul>
    </div>
@endsection
