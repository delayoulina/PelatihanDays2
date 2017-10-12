<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    //
    private $table = 'saldos';
    private $primaryKey = 'id';
    protected $fillable = [
    	'id_user',
    	'desc',
    	'saldo'
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
