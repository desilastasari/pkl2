<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    protected $fillable = ['ptg_nama', ];
    public $timestamp = true;
}
