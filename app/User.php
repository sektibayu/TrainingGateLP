<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $primaryKey='user_id';
    public $timestamps=false;
    protected $fillable =[
    'username',
    'password',
   	'role_role_id'
    ];
}
