<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
   protected $table = 'kategori';
   protected $primaryKey = 'id_kategori';

    protected $timestamp = false;

    protected $fillable = [
       'id_kategori',
       'kategori'
   ];
}
