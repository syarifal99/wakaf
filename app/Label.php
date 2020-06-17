<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    protected $table = 'label';
    protected $primaryKey = 'id_label';

    protected $timestamp = false;

    protected $fillable = [
       'id_label',
       'label'
   ];
}
