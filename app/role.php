<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $primaryKey='role_id';
    public $timestamps=false;
    protected $fillable =[
    'rolename'
    ];
    public function user(){
    	return $this->hasMany('App\user','role_role_id','role_id');
    }
}
