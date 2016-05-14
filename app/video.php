<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $primaryKey='video_id';
    public $timestamps=false;
    protected $fillable =[
    'nama_video',
    'alamat_video'
    ];

    public function Section(){
    	return $this->hasMany('App\Section','video_video_id','video_id');
    }
}
