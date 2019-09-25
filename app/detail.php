<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    protected $fillable = ['bukus_id', 'detail_tgl_kembali', 'detail_denda', 'detail_kembali'];
    public $timestamp =true;
}
