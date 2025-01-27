@extends('layouts.app')

@section('content')
    <h1>All Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn">Create a New Post</a>

    <div class="card">
        <ul>
            @foreach ($posts as $post)
                <li>
                    <strong>{{ $post->title }}</strong><br>
                    {{ $post->body }}<br>
                    <small>By: {{ $post->user->name }}</small><br>

                    <!-- View Post -->
                    <a href="{{ route('posts.show', $post) }}" class="btn">View</a> 

                    <!-- Edit Post -->
                    <a href="{{ route('posts.edit', $post) }}" class="btn">Edit</a>

                    <!-- Delete Post -->
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
