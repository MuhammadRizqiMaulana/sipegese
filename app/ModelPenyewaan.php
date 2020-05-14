<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPenyewaan extends Model
{
    public $timestamps = false;
	
    protected $table  = 'penyewaan';  //nama tabel
    protected $primaryKey   = 'id_penyewaan';  //primary key
    protected $keyType = 'string'; //primary key berupa string bukan integer
    protected $fillable      = ['id_user', 
    							'id_gedung',
    							'id_admin',
                                'tanggal_sewa',
                                'tanggal_selesai',
                                'nama_acara',
                                'nama_penyewa',
                                'email_penyewa',
    							'status_sewa']; //field tabel

    public function Gedung() { //jenis produk dimiliki oleh produk
        return $this->belongsTo(ModelGedung::class,'id_gedung');
        //nama_modelTabelrelasinya,foreignkey di tabel produk
    }
}
