<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $fillable = ['idkc', 'namakecamatan', 'warna', 'geojson'];

    public function kedelai(){
        return $this->hasMany(Kedelai::class, 'kecamatan_id', 'id');
    }

    public function lahan(){
        return $this->hasMany(Lahan::class, 'kecamatanid', 'id');
    }

}
