<!-- resources/views/organizations/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Edit Organization</h2>
        <form action="{{ route('organizations.update', $organization->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" value="{{ $organization->name }}" class="form-control" required>
                <!-- Update other fields as needed -->
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <a href="{{ route('organizations.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection
