@extends('layouts.app')

@section('content')
<div class="container">
    <h1>View Subscriptions</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Duration</th>
                <th>Price</th>
                <th>Logo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subscriptions as $subscription)
            <tr>
                <td>{{ $subscription->Name }}</td>
                <td>{{ $subscription->Type }}</td>
                <td>{{ $subscription->Duration }}</td>
                <td>${{ $subscription->Price }}</td>
                <td>
                    @if($subscription->Logo)
                        <img src="../{{ $subscription->Logo }}" alt="Logo" style="width:50px;">
                    @else
                        No logo
                    @endif
                </td>
                <td>
                    <a href="{{ url('/admin/edit_subscription/' . $subscription->id) }}" class="btn btn-sm btn-warning">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
