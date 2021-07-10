@extends('layouts.index')
@section('content')
<div class="container bg-primary p-3">
    @foreach($data as $a)
    <h3>Edit Pegawai {{ $a->nama }}</h3>
    <form action="{{ route('pegawai.update',$a->id) }}" method="Post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mt-2">
                    <label for="">NIP</label>
                    <input type="text" name="nip" value="{{ $a->nip }}" class="form-control">
                </div>

                <div class="form-group mt-2">
                    <label for="">Nama Pegawai</label>
                    <input type="text" name="nama" value="{{ $a->nama }}" class="form-control">
                </div>

                <div class="form-group mt-2">
                    <label for="">alamat Pegawai</label>
                    <input type="text" name="alamat" value="{{ $a->alamat }}" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mt-2">
                    <label for="">tempat Lahir Pegawai</label>
                    <input type="text" name="tempat_lahir" value="{{ $a->tempat_lahir }}" class="form-control">
                </div>

                <div class="form-group mt-2">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" value="{{ $a->tgl_lahir }}" class="form-control">
                </div>

                <div class="form-group mt-2">
                    <label for="">Hp Pegawai</label>
                    <input type="text" name="no_hp" value="{{ $a->no_hp }}" class="form-control">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group mt-2">
                    <label for="">Kelamin</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="kelamin_id" id="inlineRadio1" value="1">
                        <label class="form-check-label" for="inlineRadio1">Pria</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="kelamin_id" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                    </div>
                </div>

                <div class="form-group mt-2">
                    <label for="">Agama</label><br>
                    <table class="table table-borderless">
                        <tr style='width=fit-content;'>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="agama_id" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">Islam</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="agama_id" id="inlineRadio2" value="2">
                                    <label class="form-check-label" for="inlineRadio2">Hindu</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="agama_id" id="inlineRadio2" value="3">
                                    <label class="form-check-label" for="inlineRadio2">Kristen Protestan</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="agama_id" id="inlineRadio2" value="6">
                                    <label class="form-check-label" for="inlineRadio2">Budha</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="agama_id" id="inlineRadio2" value="5">
                                    <label class="form-check-label" for="inlineRadio2">Khonghucu</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="agama_id" id="inlineRadio2" value="4">
                                    <label class="form-check-label" for="inlineRadio2">Kristen Katolik</label>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="form-group mt-2">
                    <label for="">Jabatan</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jabatan_id" id="inlineRadio1" value="1">
                            <label class="form-check-label" for="inlineRadio1">HRD</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jabatan_id" id="inlineRadio2" value="2">
                            <label class="form-check-label" for="inlineRadio2">Admin</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jabatan_id" id="inlineRadio2" value="3">
                            <label class="form-check-label" for="inlineRadio2">Staff</label>
                        </div>
                    </div>

                <div class="form-group mt-2">
                    <label for="">Golongan</label><br>
                    <div class="row">
                        <div class="col d-flex justify-content-between">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="golongan_id" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">Golongan 1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="golongan_id" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">Golongan 2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="golongan_id" id="inlineRadio2" value="3">
                                <label class="form-check-label" for="inlineRadio2">Golongan 3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="golongan_id" id="inlineRadio2" value="4">
                                <label class="form-check-label" for="inlineRadio2">Golongan 4</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group mt-2">
            <label for="">Foto Pegawai</label>
            <input type="file" name="foto" class="form-control" value="{{ $a->foto ?? ''}}">
        </div>

        @endforeach

        <button class="btn btn-outline-success mt-5" name="proses" type="submit">Simpan</button>
        <a href="{{ url('/pegawai') }}" class="btn btn-outline-danger mt-5" name="unproses" type="reset">Batal</a>
    </form>
</div>
@endsection