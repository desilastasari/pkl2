<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    protected $fillable = ['penimjams_id','bukus_id', 'peninjamen_id', 'detail_denda', 'detail_kembali'];
    public $timestamp =true;

     public function peminjams()
    {
        return $this->belongsTo('App\penimjam','penimjams_id');
    }

     public function bukus()
    {
        return $this->belongsTo('App\buku','bukus_id');
    }

     public function peninjamen()
    {
        return $this->belongsTo('App\peninjaman','peninjamen_id');
    }
    

    

}
