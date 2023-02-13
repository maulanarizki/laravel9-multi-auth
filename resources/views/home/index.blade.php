@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1 class="mb-3">Laravel 9 - Pemerintah Kabupaten Jombang</h1>
        <p class="lead">Dinas Komunikasi Kabupaten Jombang</p>
        <a class="btn btn-lg btn-primary" href="https://jombangkab.go.id" role="button">Lihat Disini &raquo;</a>
        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Sesuaikan dengan kebutuhan kalian sendiri.</p>
        @endguest
    </div>
@endsection
