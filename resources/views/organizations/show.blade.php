<!-- resources/views/organizations/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h2>{{ $organization->name }}</h2>
    <!-- Display other organization details as needed -->
    <a href="{{ route('organizations.index') }}">Back to List</a>
@endsection
