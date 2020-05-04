<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelGedung extends Model
{
    public $timestamps = false;
	
    protected $table  = 'gedung';  //nama tabel
    protected $primaryKey   = 'id_gedung';  //primary key
    protected $fillable      = ['nama_gedung', 
    							'alamat',
    							'deskripsi',
                                'harga',
    							'gambar']; //field tabel 
}
