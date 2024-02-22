<!-- resources/views/posts/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

    <form method="POST" action="{{ route('posts.update', $post) }}">
        @csrf
        @method('PUT')

        <label for="title">Title</label>
        <input type="text" name="title" value="{{ $post->title }}" required>

        <label for="description">Description</label>
        <textarea name="description" required>{{ $post->description }}</textarea>

        <button type="submit" class="btn btn-success">Update Post</button>
    </form>

    <!-- Form for deleting the post -->
    <form method="POST" action="{{ route('posts.destroy', $post) }}" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete Post</button>
    </form>
@endsection
