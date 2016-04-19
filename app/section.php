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
    'video_id_video',
    'materi_id_materi',
    'soal_soal_id'
    ];
}
