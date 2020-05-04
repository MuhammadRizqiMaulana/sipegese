<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelGaleri extends Model
{
    public $timestamps = false;
	
    protected $table  = 'galeri';  //nama tabel
    protected $primaryKey   = 'id_galeri';  //primary key
    protected $fillable      = ['id_gedung', 
    							'nama_galeri',
    							'nama_gambar']; //field tabel
}
