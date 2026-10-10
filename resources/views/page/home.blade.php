@extends('layouts.app')

@section('title', 'home')
@section('content')
 <div class="row justify-content-center">
            <div class="col-md-12">
            <h2 class="mt-5">Selamat Datang</h2>
            <p>ini adalah halaman utama project laravel web profile</p>
            <a class="btn btn-primary" href="{{url('/profil')}}">Lihat Profil</a>
            </div>
        </div>

@endsection