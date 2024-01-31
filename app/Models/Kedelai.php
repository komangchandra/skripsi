<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kedelai extends Model
{
    use HasFactory;

    protected $fillable = ['kelas', 'kecamatan_id', 'warna', 'geojson'];
    protected $with = ['kecamatan'];
    // protected $connection = 'mysql';
    // protected $table = 'kedelais';

    public function kecamatan(){
        return $this->belongsTo(Kecamatan::class);
    }
}
