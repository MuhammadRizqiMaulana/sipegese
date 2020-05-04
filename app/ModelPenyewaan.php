<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPenyewaan extends Model
{
    public $timestamps = false;
	
    protected $table  = 'penyewaan';  //nama tabel
    protected $primaryKey   = 'id_penyewaan';  //primary key
    protected $fillable      = ['id_user', 
    							'id_gedung',
    							'id_admin',
                                'tanggal_sewa',
                                'tanggal_selesai',
                                'nama_acara',
                                'nama_penyewa',
                                'email_penyewa',
    							'status_sewa']; //field tabel
}
