@extends('layouts.main')

@section('section')
    <h1 class="mb-5">Post Author : {{ $author }}</h1>

    @foreach($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            {!! $post->excerpt !!}
        </article>
    @endforeach
@endsection