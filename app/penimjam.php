<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penimjam extends Model
{
     protected $fillable = ['pjm_nama', 'pjm_alamat', 'pjm_telp', 'pjm_foto'];
    public $timestamp =true;
}
