@extends('layouts.main')

@section('section')
    <h1 class="mb-5">Halaman Authors</h1>
    @foreach($authors as $author)
        <ul>
            <li>
                <a href="/author/{{ $author->username }}"><h2>{{ $author->name }}</a></h2>
            </li>
        </ul>
    @endforeach
@endsection