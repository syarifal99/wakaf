<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Validasi extends Model
{
    protected $table = 'validasi';
    protected $primaryKey = 'id_validasi';

    protected $timestamp = false;

    protected $fillable = [
       'id_pendaftaran',
       'id_mitra'
   ];
    public function pendaftran(){
        return $this->belongsTo(Pendaftran::class,'id_pendaftran');
    }
    public function mitra(){
        return $this->belongsTo(Mitra::class,'id_mitra');
    }
}
