<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Agama extends Model
{
    use HasFactory;
    protected $table = 'agama';

    public function pegawai(){
        return $this->belongsTo('App\Models\Pegawai');
    }

}
