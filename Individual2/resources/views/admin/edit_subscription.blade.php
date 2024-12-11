@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Subscription</h1>
    <form action="{{ url('/admin/edit_subscription/' . $subscription->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $subscription->name }}" required>
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" name="type" id="type" class="form-control" value="{{ $subscription->type }}" required>
        </div>
        <div class="form-group">
            <label for="duration">Duration (months)</label>
            <input type="number" name="duration" id="duration" class="form-control" value="{{ $subscription->duration }}" required>
        </div>
        <div class="form-group">
            <label for="price">Price ($)</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" value="{{ $subscription->price }}" required>
        </div>
        <div class="form-group">
            <label for="logo">Logo URL</label>
            <input type="url" name="logo" id="logo" class="form-control" value="{{ $subscription->logo }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Subscription</button>
    </form>
</div>
@endsection
