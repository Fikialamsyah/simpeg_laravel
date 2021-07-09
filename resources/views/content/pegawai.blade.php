@extends('layout.layout')
@php 
$ar_judul = ['No', 'Foto','NIP', 'Nama', ' Alamat', 'Tempat Lahir', 'Tgl Lahir','No HP','Kelamin', 'Agama','Jabatan','Golongan','Action'];
$no = 1;
@endphp
@section('content')
<h3>Daftar Pegawai</h3>

<a class="btn btn-outline-info" href="{{ route('pegawai.create') }}"> Tambah </a>
<table class="table table-striped">
    <thead>
        <tr>
            @foreach($ar_judul as $jdl)
            <th class="text-center">{{ $jdl }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach($ar_peg as $a)
        <tr>
            <td>{{ $no++ }}</td>
            <td width="10%">
                @php
                if(!empty($a->foto)){
                @endphp   
                    <img src="{{ asset('images')}}/{{$a->foto}}" width="100%" alt="">
                @php
                }else{
                @endphp
                    <img src="{{ asset('images') }}/noprofil.jpg" width="100%" alt="">
                @php
                }
                @endphp            
            </td>
            <td>{{ $a->nip }}</td>
            <td>{{ $a->nama }}</td>
            <td width="20%">{{ $a->alamat }}</td>
            <td width="8%">{{ $a->tempat_lahir }}</td>
            <td>{{ $a->tgl_lahir }}</td>
            <td>{{ $a->no_hp }}</td>
            <td>{{ $a->kelamin_id }}</td>
            <td>{{ $a->agama_id }}</td>
            <td>{{ $a->jabatan_id }}</td>
            <td>{{ $a->golongan_id }}</td>
            <td>
            <form method="post" action="{{ route('pegawai.destroy',$a->id) }}">
                @csrf
                @method('delete')
                <a class="btn btn-outline-info" href="{{ route('pegawai.show',$a->id) }}"> Detail </a>
                <a class="btn btn-outline-warning" href="{{ route('pegawai.edit',$a->id) }}"> Edit </a>
                <button class="btn btn-outline-danger" onclick="return confirm('Anda Yakin Ingin Dihapus?')">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection