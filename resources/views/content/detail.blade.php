@extends('layouts.index')

@section('content')
@foreach($ar_pegawai as $a)

<div class="container card p-3 bg-primary">
    <div class="team-single">
        <div class="row">
            <div class="col-lg-4 col-md-5 xs-margin-30px-bottom">
                <div class="team-single-img">
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
                </div>
            </div>

            <div class="col-lg-8 col-md-7">
                <div class="team-single-text padding-50px-left sm-no-padding-left">
                <h4 class="font-size38 sm-font-size32 xs-font-size30 mb-3">Detail Pegawai</h4>
                    <div class="contact-info-section margin-40px-tb">
                        <ul class="list-style9 no-margin">
                            <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                    <i class="far fa-id-badge"></i>
                                        </i><strong class="margin-10px-left text-orang none"> NIP :</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{ $a->nip }}</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="far fa-address-card"></i>
                                        </i><strong class="margin-10px-left text-orange"> Nama :</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p><{{ $a->nama }}</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-envelope text-pink"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-pink"> Alamat : </strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{ $a->alamat }}</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-envelope text-pink"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-pink"> Tempat Lahir : </strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{ $a->tempat_lahir }}</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-envelope text-pink"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-pink"> Tanggal Lahir :</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{ $a->tgl_lahir }}</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-envelope text-pink"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-pink"> No telp : </strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{ $a->no_hp }}</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-envelope text-pink"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-pink"> Kelamin</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{ $a->kelamin_id }}</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-praying-hands"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-pink"> Agama:</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{ $a->agama_id }}</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-envelope text-pink"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-pink"> Jabatan</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{ $a->jabatan_id }}</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-envelope text-pink"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-pink"> Golongan</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{ $a->golongan_id }}</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="kembali">
                <a href="{{url('/pegawai')}}" class="btn btn-info">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection