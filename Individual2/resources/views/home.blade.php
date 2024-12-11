<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Your Subscriptions</h3>
                    @if ($subscriptions->isEmpty())
                        <p>You don't have any subscriptions.</p>
                    @else
                        <ul>
                            @foreach ($subscriptions as $subscription)
                                <li>
                                    <strong>{{ $subscription->Name }}</strong><br>
                                    Type: {{ $subscription->Type }}<br>
                                    Duration: {{ $subscription->Duration }}<br>
                                    Price: ${{ $subscription->Price }}<br>
                                    <img src="{{ asset($subscription->Logo) }}" alt="{{ $subscription->Name }} Logo" width="50">
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
