@extends('layouts.main')

@section('section')
    <h1 class="mt-2">Halaman About</h1>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
    <h5 class="mt-2">Nama : {{ $name }}</h5>
    <h5>Email : {{ $email }}</h5>
    <p class="mt-4">Deskripsi : </p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore possimus ducimus excepturi quos quod libero, molestiae officia provident illo deserunt odit natus quas qui distinctio et suscipit nisi saepe eius similique quisquam veritatis odio iure repudiandae sapiente! Quaerat vitae sapiente dolores fuga sint porro rerum, et quisquam, quae blanditiis perspiciatis sit reprehenderit non. </p>
    <p>Consectetur provident est delectus dolor exercitationem inventore? Ratione corporis impedit aspernatur laboriosam magnam blanditiis at alias, tempora obcaecati ipsum inventore iste voluptatem earum. Error quasi sed architecto magnam at ratione expedita repellat molestias assumenda, voluptatem officiis?</p> 
    <p>Consequuntur voluptas fugit quidem similique suscipit, enim nobis quasi adipisci labore dolores eligendi fugiat quas quisquam optio ex est accusantium, voluptatum esse aut porro eius? Dolores inventore nesciunt temporibus laboriosam numquam.</p>
@endsection