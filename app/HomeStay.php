<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeStay extends Model
{
    //
    private $table = 'home_stays';

    private $primaryKey = 'id';

    private $timestamps = false;

    protected $fillable = [
    	'nama_homestay',
    	'alamat',
    	'desc'
    ];
}
