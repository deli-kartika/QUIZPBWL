@extends('dashboard.layouts.main')

@section('main-body')
{{-- <h1>Ini adalah halaman Dashboard!</h1> --}}

<div class="alert alert-success" role="alert">
    Selamat datang di Database PLN, {{ auth()->user()->nama }}!
</div>

  
@endsection
