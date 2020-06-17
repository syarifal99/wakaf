<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $table = 'mitra';
    protected $primaryKey = 'id_mitra';

    protected $timestamp = false;

    protected $fillable = [
       'nm_mitra',
       'nm_pjmitra',
       'no_rek',
       'username',
       'email',
       'password',
       'no_hp',
       'logo_mitra'
   ];
}
