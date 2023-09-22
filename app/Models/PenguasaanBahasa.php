<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenguasaanBahasa extends Model
{
    use HasFactory;
    protected $table = 'penguasaan_bahasas';

    protected $guarded = ['id'];

    public $timestamps = false;

    public function pelamar(){
        return $this->belongsTo(Pelamar::class,'id_pelamar','id');
        
    }
}
