@extends('layouts.main')

@section('section')
    <h1 class="mb-5">Halaman Categories</h1>
    @foreach($categories as $category)
        <ul>
            <li>
                <a href="/categories/{{ $category->slug }}"><h2>{{ $category->name }}</a></h2>
            </li>
        </ul>
    @endforeach
@endsection