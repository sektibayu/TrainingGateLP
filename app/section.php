<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class section extends Model
{
    protected $primaryKey='section_id';
    public $timestamps=false;
    protected $fillable =[
    'nama_section',
    'course_course_id',
    'video_video_id',
    'materi_materi_id',
    'soal_soal_id'
    ];

    public function course(){
    	return $this->belongTo('App/course','course_course_id','course_id');
    }

    public function video(){
        return $this->belongTo('App/video','video_video_id','video_id');
    }

    public function materi(){
        return $this->belongTo('App/materi','materi_materi_id','materi_id');
    }
    public function soal(){
        return $this->belongTo('App/soal','soal_soal_id','soal_id');
    }

    public function course(){
        return $this->belongToMany('App/user');
    }
}
