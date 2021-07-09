<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';

    // public function agama(){
    //     return $this->hasMany('App\Models\Agama');
    // }
    // public function golongan(){
    //     return $this->hasMany('App\Models\Golongan');
    // }
    // public function jabatan(){
    //     return $this->hasMany('App\Models\Jabatan');
    // }
    // public function kelamin(){
    //     return $this->hasMany('App\Models\Kelamin');
    // }
}
