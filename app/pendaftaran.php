<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pendaftaran extends Model
{
      protected $fillable = ['petugas_id',
                              'peminjams_id',
                              'kartu_pembuatan',
                              'kartu_akhir',
                              ];
   public function penimjam(){
    	return $this->belongsTo('App\penimjam');
    }   

     public function petugas()
    {
        return $this->belongsTo('App\petugas','petugas_id');
    }

    public function penimjams()
    {
        return $this->belongsTo('App\penimjam','peminjams_id');
    }

    
}

