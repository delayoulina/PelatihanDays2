<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table = 'roles';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'desc'
    ];

    public function user(){
    	return $this->hasMany('App\User');
    }

    public function permission(){
    	return $this->hasMany('App\Permission');
    }
}
