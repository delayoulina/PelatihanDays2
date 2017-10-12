<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //
    private $table = 'transaksis';
    private $primaryKey = 'id';
    private $timestamps = 'false';
    protected $fillable = [
    	'id_homestay',
    	'id_user',
    	'tgl_masuk',
    	'tgl_keluar',
    	'total_harga'
    ];

    public function homestay(){
        return $this->belongsTo('App\HomeStay');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
