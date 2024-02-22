<!-- resources/views/posts/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create a New Post</h1>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" required>

        <label for="description">Description</label>
        <textarea name="description" required></textarea>

        <button type="submit">Create Post</button>
    </form>
@endsection
