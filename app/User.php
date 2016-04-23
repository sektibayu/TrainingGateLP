<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
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
    	return $this->belongTo('App/Role','role_role_id','role_id');
    }

    public function course(){
        return $this->belongsToMany('App/Course','');
    }

    public function section(){
        return $this->belongsToMany('App\Section','finished_sections','user_user_id','section_section_id');
    }
}
