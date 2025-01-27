@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <small>By: {{ $post->user->name }}</small><br>
    <br>

    <a href="{{ route('posts.index') }}" class="btn">Back to Posts</a>
@endsection
