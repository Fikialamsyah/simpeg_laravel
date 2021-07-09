@extends('layout.layout')

@section('content')
@foreach($ar_pegawai as $a)
@php
    if(!empty($a->foto)){
        @endphp   
            <img src="{{ asset('images')}}/{{$a->foto}}" width="20%" alt="">
        @php
    }else{
        @endphp
            <img src="{{ asset('images') }}/noprofil.jpg" width="20%" alt="">
        @php
    }
@endphp 
<h3>{{ $a->nama }}</h3>
<p>{{ $a->nip }}</p>
<p>{{ $a->alamat }}</p>
<p>{{ $a->tempat_lahir }}</p>
<p>{{ $a->tgl_lahir }}</p>
<p>{{ $a->no_hp }}</p>
<p>{{ $a->kelamin_id }}</p>
<p>{{ $a->agama_id }}</p>
<p>{{ $a->jabatan_id }}</p>
<p>{{ $a->golongan_id }}</p>
@endforeach
<a href="{{ url('/pegawai') }}" class="btn btn-primary">Kembali</a>
@endsection