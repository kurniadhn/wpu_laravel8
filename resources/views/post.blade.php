@extends('layouts.main')

@section('section')
    <h2>{{ $post->title }}</h2>

    <p>By. <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

    <p>{!! $post->body !!}</p>

    <a href="/posts" class="text-decoration-none">Back to Posts</a>
@endsection