<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
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

    public function Course(){
    	return $this->belongTo('App/Course','course_course_id','course_id');
    }

    public function Video(){
        return $this->belongTo('App/Video','video_video_id','video_id');
    }

    public function Materi(){
        return $this->belongTo('App/Materi','materi_materi_id','materi_id');
    }
    public function Soal(){
        return $this->belongTo('App/Soal','soal_soal_id','soal_id');
    }

    public function User(){
        return $this->belongsToMany('App\User','finished_sections','section_section_id','user_user_id');
    }
}
