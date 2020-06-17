<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftaran';
    protected $primaryKey = 'id_pendaftaran';

    protected $timestamp = false;

    protected $fillable = [
       'nm_pendaftaran',
       'nm_produk',
       'id_kategori',
       'id_label',
       'nominal',
       'tenggat_waktu',
       'provinsi',
       'id_kota',
       'status',
       'gambar'
   ];
   public function kategori(){
    return $this->belongsTo(Kategori::class,'id_kategori');
}
   public function label(){
    return $this->belongsTo(Label::class,'id_label');
}
   public function kota(){
    return $this->belongsTo(Kota::class,'id_kota');
}
   
}
