<!-- resources/views/posts/show.blade.php -->
@extends('layouts.base')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->description }}</p>
    <p>Published on: {{ $post->published_at }}</p>
    <!-- Add other details as needed -->

    <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edit Post</a>
    <!-- You can add a delete button if needed -->
    <!-- Form for deleting the post -->
    <form method="POST" action="{{ route('posts.destroy', $post) }}" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete Post</button>
    </form>
@endsection
