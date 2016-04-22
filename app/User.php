<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class user extends Model implements Authenticatable
{
	use \Illuminate\Auth\Authenticatable;
    protected $primaryKey='user_id';
    public $timestamps=false;
    protected $fillable =[
    'username',
    'password',
   	'role_role_id'
    ];

    public function role(){
    	return $this->belongTo('App/role','role_role_id','role_id');
    }

    public function course(){
        return $this->belongToMany('App/course');
    }
}
