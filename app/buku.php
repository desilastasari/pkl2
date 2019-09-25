<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
     protected $fillable = ['kategoris_id', 'penerbits_id', 'buku_judul', 'buku_jumlah',
    'buku_diskripsi', 'buku_pengarang', 'buku_thn_terbit'];
    public $timestamp =true;
     public function penimjam()
    {
        return $this->hasOne('App\penimjam');
    }
}
