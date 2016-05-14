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
    	return $this->belongsTo('App\Role','role_role_id','role_id');
    }

    public function section(){
        return $this->belongsToMany('App\Section','finished_sections','user_user_id','section_section_id');
    }

    public function isAdmin(){
        return $this->role_role_id == 1;
    }
}
