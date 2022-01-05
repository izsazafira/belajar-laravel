@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>

    <h3>{{ $nama }}</h3>
    <p>halo semuanya. ini blog aku :D</p>
    <p>{{ $email }}</p>
    <p>{{ $umur }} </p>
    <img src="img/1.jpg" alt="izsa" width=200>
@endsection
