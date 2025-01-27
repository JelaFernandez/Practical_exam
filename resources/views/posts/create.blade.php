@extends('layouts.app')

@section('content')
    <h1>Create a Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required><br>

        <label for="body">Body:</label>
        <textarea name="body" id="body" required></textarea><br>

        <button type="submit" class="btn">Create Post</button>
    </form>

    <a href="{{ route('posts.index') }}" class="btn">Back to Posts</a>
@endsection
