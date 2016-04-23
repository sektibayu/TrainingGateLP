<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $primaryKey='role_id';
    public $timestamps=false;
    protected $fillable =[
    'rolename'
    ];
    public function user(){
    	return $this->hasMany('App\User','role_role_id','role_id');
    }
}
