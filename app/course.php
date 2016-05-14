<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $primaryKey='course_id';
    public $timestamps=false;
    protected $fillable =[
    'nama_course',
    'deskripsi_course'
    ];

    public function section(){
    	return $this->hasMany('App\Section','course_course_id','course_id');
    }

}
