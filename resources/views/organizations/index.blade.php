<!-- resources/views/organizations/index.blade.php -->
@extends('layouts.base')

@section('content')
    <div class="container mt-5">
        <h2>Organization List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($organizations as $organization)
                    <tr>
                        <td>{{ $organization->name }}</td>
                        <td>
                            <a href="{{ route('organizations.show', $organization->id) }}" class="btn btn-primary">Show</a>
                            <a href="{{ route('organizations.edit', $organization->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('organizations.destroy', $organization->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this organization?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('organizations.create') }}" class="btn btn-success">Create Organization</a>
    </div>
@endsection
