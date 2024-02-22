<!-- resources/views/organizations/create.blade.php -->
@extends('layouts.base')

@section('content')
    <div class="container mt-5">
        <h2>Create Organization</h2>
        <form action="{{ route('organizations.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" class="form-control" required>
                <!-- Add other fields as needed -->
            </div>
            <button type="submit" class="btn btn-success">Create</button>
        </form>
        <a href="{{ route('organizations.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection
