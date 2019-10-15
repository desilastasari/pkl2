<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
     protected $fillable = ['kategoris_id', 'penerbits_id', 'buku_judul', 'buku_jumlah',
    'buku_diskripsi', 'buku_pengarang', 'buku_thn_terbit'];
    public $timestamp =true;
   public function kategoris()
    {
        return $this->belongsTo('App\kategori','kategoris_id');
    }

     public function penerbits()
    {
        return $this->belongsTo('App\penerbit','penerbits_id');
    }
    public function detail()
    {
        return $this->belongsTo('App\detail','buku_id');
    }

    
}
