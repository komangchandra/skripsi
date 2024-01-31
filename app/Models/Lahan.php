<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lahan extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $with = ['kecamatan'];
    

    public function kecamatan(){
        return $this->belongsTo(Kecamatan::class);
    }
}
