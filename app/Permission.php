<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
    private $table = 'permissions';
    private $primaryKey = 'id';
    protected $fillable = [
    	'id_role',
    	'desc'
    ];

    public function role(){
    	return $this->belongsTo('App\Role');
    }
}
