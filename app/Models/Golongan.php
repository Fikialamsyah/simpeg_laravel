<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Golongan extends Model
{
    use HasFactory;
    protected $table = 'golongan';

    public function pegawai(){
        return $this->belongsTo('App\Models\Pegawai');
    }
}
