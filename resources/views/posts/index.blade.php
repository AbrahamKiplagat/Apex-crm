<!-- resources/views/posts/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>All Posts</h1>

    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>

    @foreach($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->description }}</p>
            <a href="{{ route('posts.show', $post) }}" class="btn btn-info">Read more</a>
            <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edit</a>
            <!-- You can add a delete button if needed -->
        </div>
    @endforeach
@endsection
