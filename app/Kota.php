<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $table = 'kota';
    protected $primaryKey = 'id_kota';

    protected $timestamp = false;

    protected $fillable = [
       'id_provinsi',
       'kota'
   ];
   public function provinsi(){
       return $this->belongsTo(Provinsi::class,'id_provinsi');
   }
}
