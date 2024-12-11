@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Subscription</h1>
    <form action="{{ route('admin.store_subscription') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="Name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" name="Type" id="type" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="duration">Duration (months)</label>
            <input type="number" name="Duration" id="duration" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="price">Price ($)</label>
            <input type="number" step="0.01" name="Price" id="price" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="logo">Logo URL</label>
            <input type="text" name="Logo" id="logo" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Add Subscription</button>
    </form>
</div>
@endsection
