@extends('layouts.main')

@section('section')
    <h1 class="mt-2">Halaman About</h1>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
    <h5 class="mt-2">Nama : {{ $name }}</h5>
    <h5>Email : {{ $email }}</h5>
    <p class="mt-4">Deskripsi : </p>
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet incidunt reiciendis voluptatum dolor, enim cumque autem molestiae deleniti atque, earum sunt. Explicabo adipisci accusamus enim assumenda natus quae impedit corrupti.
@endsection