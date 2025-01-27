@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}" required><br>

        <label for="body">Body:</label>
        <textarea name="body" id="body" required>{{ $post->body }}</textarea><br>

        <button type="submit">Update Post</button>

    </form>
   


    <a href="{{ route('posts.index') }}">Back to posts list</a>
@endsection
