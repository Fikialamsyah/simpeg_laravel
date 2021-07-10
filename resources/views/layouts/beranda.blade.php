@extends('layouts.index')
@section('content')
<div class="jumbotron mt-5 mb-5">
    <h1 class="display-4">Selamat Datang di <span class="text-secondary">SIMPEG</span></h1>
    <p class="lead">Sistem Informasi Kepegawaian adalah aplikasi untuk mendata karyawan dengan menggunakan framework laravel 8.</p>
    <a class="btn btn-primary btn-lg" href="{{url('/pegawai')}}" role="button">Get's Started</a>
</div>
@endsection