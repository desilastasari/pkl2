<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peninjaman extends Model
{
     protected $fillable = ['petugas_id','peminjams_id', 'pjm_nama', 'pjmn_tgl', 'pjmn_tgl_kembali'];
    public $timestamp = true;


    public function petugas()
    {
        return $this->belongsTo('App\petugas','petugas_id');
    }

    public function penimjams()
    {
        return $this->belongsTo('App\penimjam','peminjams_id');
    }
}
